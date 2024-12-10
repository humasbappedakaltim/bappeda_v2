<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->get('lang', 'id');

        setlocale(LC_TIME, $locale); // Set bahasa untuk LC_TIME
        app()->setLocale($locale);

        return $next($request);
    }
}
