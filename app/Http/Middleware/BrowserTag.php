<?php

namespace App\Http\Middleware;

use Closure;

class BrowserTag
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $tag = \Cookie::get('browser-tag');
        if (empty($tag)) {
            $val = uniqid();
            \Cookie::queue(\Cookie::forever('browser-tag', $val));
        }

        return $next($request);
    }
}
