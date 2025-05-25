<?php

namespace TranslatedRoutes\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class SetLocaleFromPath
{
    public function handle($request, Closure $next)
    {
        $supported = Config::get('translated-routes.supported_locales', ['en']);
        $routes = Config::get('translated-routes.routes', []);
        $path = trim($request->path(), '/');

        foreach ($routes as $name => $translations) {
            foreach ($translations as $locale => $uri) {
                if ($uri === $path && in_array($locale, $supported)) {
                    App::setLocale($locale);
                    session([Config::get('translated-routes.session_key') => $locale]);
                    break 2;
                }
            }
        }

        if (!App::getLocale()) {
            $locale = session(Config::get('translated-routes.session_key'))
                ?? (Auth::check() ? (Auth::user()->{Config::get('translated-routes.user_locale_attribute')} ?? null) : null)
                ?? config('app.locale');
            App::setLocale($locale);
        }

        return $next($request);
    }
}
