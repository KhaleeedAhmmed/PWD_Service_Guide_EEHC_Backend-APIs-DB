<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class APIVersion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->header("Api-Version") == "v1") {
            return $next($request);
        } else {
            $error = [["api_version" => ["Api Version Not Valid"]]];
            return response()->error($error, "Api Version Not Valid", 406);
        }
    }
}
