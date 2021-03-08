<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use View;
use Closure;
use Session;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = Session::get('locale') ?? app()->getLocale();

        app()->setLocale($locale);

        $switch = $locale == 'en' ? 'ar' : 'en';

        View::share('switchLanguage', $switch);

        return $next($request);
    }
}
