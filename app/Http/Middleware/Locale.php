<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class Locale
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
        $raw_locale = session()->get('locale');

        if(in_array($raw_locale,config('app.locales'))){
            $locale = $raw_locale;
        }else{
            $locale = config('app.locale');
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
