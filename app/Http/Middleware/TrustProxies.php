<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure; // Import Closure from the global namespace
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    protected $proxies = '*';  // Trust all proxies or specify specific ones
    protected $headers = Request::HEADER_X_FORWARDED_ALL;

    /**
     * Handle the incoming request and modify the URL scheme based on the forwarded protocol.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the request is behind a proxy and has the X-Forwarded-Proto header
        if ($request->headers->has('X-Forwarded-Proto') && $request->headers->get('X-Forwarded-Proto') === 'http') {
            // Ensure the scheme stays as http
            $request->server->set('HTTPS', 'off');
        }

        return $next($request);
    }
}
