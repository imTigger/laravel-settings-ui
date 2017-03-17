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
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'laravel-settings-ui');

        $this->publishes([
            __DIR__.'/Forms/LaravelSettingsForm.php' => app_path('Forms/LaravelSettingsForm.php')
        ], 'forms');

        $this->publishes([
            __DIR__.'/resources/lang/en/laravel-settings-ui.php' => resource_path('lang/en/laravel-settings-ui.php')
        ], 'languages');

        $this->publishes([
            __DIR__.'/resources/views/laravel-settings-ui.blade.php' => resource_path('views/vendor/laravel-settings-ui.blade.php')
        ], 'views');
    }

}