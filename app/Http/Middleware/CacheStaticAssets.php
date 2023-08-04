<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CacheStaticAssets
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Check if the response is for a static asset (e.g., CSS, JS, images)
        if ($response->isSuccessful() && $response instanceof Response
            && in_array($response->headers->get('Content-Type'), ['text/css', 'application/javascript', 'image/jpeg', 'image/png'])
        ) {
            // Set the cache headers for the static assets
            $response->setPublic();
            $response->setMaxAge(3600); // 1 week in seconds
            $response->setSharedMaxAge(3600); // 1 week in seconds
        }

        return $response;
    }
}
