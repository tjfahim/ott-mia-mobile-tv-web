<?php

namespace App\Jobs;

use App\IpTVContent;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\File;

class InsertDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $filePath;

    /**
     * Create a new job instance.
     *
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if (!File::exists($this->filePath)) {
            // Log an error or handle it as needed
            return;
        }

        $handle = fopen($this->filePath, 'r');
        if ($handle) {
            $result = [];
            $item = null;
            $chunkSize = 1000; // Process 100 records at a time

            while (($line = fgets($handle)) !== false) {
                $line = trim($line);

                if (str_starts_with($line, "#EXTINF")) {
                    $item = [];
                    preg_match_all('/(\w+)=["](.*?)["]/', $line, $matches);
                    $item['tag'] = trim(substr($line, strrpos($line, ',') + 1));

                    foreach ($matches[1] as $index => $key) {
                        $item[$key] = $matches[2][$index];
                    }

                    if($item['name']) {
                        // Match season and episode
                        $pattern_s = '/S(\d{2})/';
                        $pattern_e = '/E(\d{2})/';

                        preg_match($pattern_s, $item['name'], $session);
                        preg_match($pattern_e, $item['name'], $episod);

                        // Extract matched season and episode
                        $item['s'] = $session[1] ?? null; // Season number
                        $item['e'] = $episod[1] ?? null;  // Episode number
                    }
                } elseif ($item && !str_starts_with($line, "#")) {
                    $item['url'] = $line;
                    $result[] = [
                        'tvg-id' => $item['id'] ?? null,
                        'name' => $item['name'] ?? null,
                        'title' => $item['title'] ?? null,
                        'tag' => $item['tag'] ?? null,
                        'image' => $item['logo'] ?? null,
                        'url' => $item['url'] ?? null,
                        'session' => $item['s'] ?? null,
                        'episode' => $item['e'] ?? null,
                    ];
                    $item = null;

                    // Process the chunk when it reaches the specified size
                    if (count($result) >= $chunkSize) {
                        $this->insertChunk($result);
                        $result = []; // Clear the chunk
                    }
                }
            }

            fclose($handle);

            // Insert any remaining data
            if (!empty($result)) {
                $this->insertChunk($result);
            }
        }
    }

    /**
     * Insert a chunk of data into the database.
     *
     * @param array $data
     */
    private function insertChunk(array $data)
    {
        try {
            IpTVContent::insert($data);
        } catch (\Exception $e) {
            \Log::error("Failed to insert chunk: " . $e->getMessage());
        }
    }
}
