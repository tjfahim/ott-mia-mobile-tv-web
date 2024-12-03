<?php

use App\Movies;
use App\MovieSeriesFavorite;
use App\Production_member;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //factory(Production_member::class, 10)->create();


        $users = User::all();
        $movies = Movies::all();

        foreach($users as $user){

            for($i = 0; $i<5; $i++){
                factory(App\MovieSeriesFavorite::class)->create([
                    'user_id' => $user->id,
                    'movie_videos_id' => $movies->random()->id,
                    'is_favorite' => 1
                ]);
            }
        }
        
    }
}
