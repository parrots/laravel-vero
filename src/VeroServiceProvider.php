<?php

namespace SamLittler\LaravelVero;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class VeroServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(\Vero::class, function ($app) {
            return new \Vero(self::config('api_key'));
        });

        $this->app->bind('vero', function () {
            return $this->app->resolveProvider(\Vero::class);
        });
    }

    private static function config($key) : string
    {
        $key = 'services.vero.' . $key;

        return Config::get($key);
    }
}
