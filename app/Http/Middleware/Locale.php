<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Config;
use Session;

class Locale
{
    /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @return mixed
    */
    public function handle($request, Closure $next){

        //$raw_locale = Session::get('locale');

        $raw_locale = $request->cookie('locale');;

        if (in_array($raw_locale, Config::get('app.locales'))) { //check if the session has these array
            $locale = $raw_locale;
        }
        else {
            $locale = Config::get('app.locale');
        }
        App::setLocale($locale);

        return $next($request);
    }
 }
