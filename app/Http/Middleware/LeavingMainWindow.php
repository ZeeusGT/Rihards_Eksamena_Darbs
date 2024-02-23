<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\Songs_Controller;

class LogUserActivity
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($request->is('songs.index')) {
            Songs_Controller::SaveLiked();
            // YourController::yourFunction();
        }

        return $response;
    }
}
