<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckScopes
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$scopes
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next, ...$scopes)
    {
        foreach ($scopes as $scope) {
            if (!$request->user()->tokenCan($scope)) {
                $error = [["scopes" => ["User Has Invalid Scope/Scopes"]]];
                return response()->error($error, "User Has Invalid Scope/Scopes", 500);
            }
        }

        return $next($request);
    }
}
