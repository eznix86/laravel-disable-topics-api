<?php

namespace Spatie\DisableTopicsApi;

use Closure;
use Illuminate\Http\Response;

class DisableTopicsApi
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($response instanceof Response) {
            if (! $response->headers->has('Permissions-Policy')) {
                $response->header('Permissions-Policy', 'browsing-topics=()');
            }
        }

        return $response;
    }
}
