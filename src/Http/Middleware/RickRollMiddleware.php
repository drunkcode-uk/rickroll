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
