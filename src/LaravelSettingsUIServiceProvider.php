<?php
namespace Imtigger\LaravelSettingsUI;

use Illuminate\Support\ServiceProvider;

class LaravelSettingsUIServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'laravel-settings-ui');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'laravel-settings-ui');

        $this->publishes([
            __DIR__ . '/Forms/LaravelSettingsForm.php' => app_path('Forms/LaravelSettingsForm.php')
        ], 'forms');

        $this->publishes([
            __DIR__ . '/config/laravel-settings-ui.php' => app_path('../config/laravel-settings-ui.php')
        ], 'configs');

        $this->publishes([
            __DIR__ . '/resources/views/laravel-settings-ui.blade.php' => resource_path('views/vendor/laravel-settings-ui.blade.php')
        ], 'views');
    }

}