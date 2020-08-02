<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateWithQueryParameter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->input('api_token');

        if ($token) {
            $request->headers->set('Authorization', "Bearer {$token}");
        }

        return $next($request);
    }
}
