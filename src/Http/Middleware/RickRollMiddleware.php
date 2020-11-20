<?php

namespace Drunkcode\RickRoll\Http\Middleware;

use Closure;

class RickRollMiddleware
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
        // If our Request doesn't accept html, exit early with next request
        if (!$request->acceptsHtml()) {
            return $next($request);
        }

        // If out Request isn't a get requets, exit early with next request
        if ($request->method() != 'GET') {
            return $next($request);
        }

        // Randomly roll if the user is gonna get RickRoll'd!
        $rick_roll = (rand(0, config('rickroll.odds')) == 0) ? true : false;

        // If Rick Roll is true, let's Rick Roll that user!
        if ($rick_roll) {
            return response()->make(view('rickroll::app'));
        }

        // They're safe....for now
        return $next($request);
    }
}
