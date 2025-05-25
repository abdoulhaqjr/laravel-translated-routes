<?php

namespace TranslatedRoutes;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use TranslatedRoutes\Middleware\SetLocaleFromPath;

class TranslatedRouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/translated-routes.php' => config_path('translated-routes.php'),
        ], 'translated-routes-config');

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $router = $this->app->make(Router::class);
        $router->pushMiddlewareToGroup('web', SetLocaleFromPath::class);
    }

    public function register()
    {
        Route::macro('transRoute', function (string $name, callable $callback) {
            $translations = config("translated-routes.routes.$name", []);
            foreach ($translations as $locale => $uri) {
                Route::get($uri, $callback)->name($name . '.' . $locale);
            }
        });
    }
}
