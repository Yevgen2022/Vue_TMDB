<?php

namespace App\Http\Middleware;

use App\Helpers\Langs;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class LangsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */


//    public function handle(Request $request, Closure $next): Response
//    {
//       // $locale = ltrim($request->route()->getPrefix(), '/');
//         $locale = $request->segment(1);
//
//
//           // Set locale by default
//        if (!$locale || !in_array($locale, Langs::LOCALES)) {
//            $locale = config('app.locale'); // Локаль за замовчуванням
//        }
//
//
//        if ($locale) {
//            App::setLocale($locale);
//            // App::setLocale(Langs::getLocale());
//        }
//
////        if ($locale === config('app.locale')) {
////           // $uri = preg_replace("#^{$locale}(/|$)#", '', $request->path());
////            $uri = str_replace($locale, '', $request->path());
////            return redirect($uri, 301);
////        }
//
//        dump($locale);
//
//        return $next($request);
//    }
//}


    public function handle(Request $request, Closure $next)
    {
        // Отримуємо локаль з першого сегменту URL
        $locale = $request->segment(1, '');

        // Логування локалі
        dump($locale);

        // Якщо локаль не вказана або не є допустимою, встановлюємо локаль за замовчуванням
        if (!$locale || !in_array($locale, Langs::LOCALES)) {
            $locale = config('app.locale'); // Локаль за замовчуванням
        }

        // Встановлюємо локаль
        App::setLocale($locale);

        // Продовжуємо обробку запиту
        return $next($request);
    }
}
