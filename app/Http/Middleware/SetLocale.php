<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Retrieve the 'lang' query parameter or use the session value as fallback
        $locale = $request->get('lang', session('locale', 'id'));
        $supportedLocales = ['en', 'id'];

        if (in_array($locale, $supportedLocales)) {
            // Save the locale to the session
            session()->put('locale', $locale);

            // Set the application's locale
            app()->setLocale($locale);
        }

        return $next($request);
    }
}
