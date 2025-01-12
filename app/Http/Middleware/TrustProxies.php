<?php

namespace App\Http\Middleware;

use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */
    protected $proxies = null;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;

    /**
     * Disable HTTPS detection by overriding the secure() method.
     */
    public function handle($request, \Closure $next)
    {
        $request->setTrustedProxies([], Request::HEADER_X_FORWARDED_ALL);
        $request->server->set('HTTPS', 'off');
        return $next($request);
    }
}
