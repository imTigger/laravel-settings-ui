# Laravel Settings UI
Simple UI for [anlutro/laravel-settings](https://github.com/anlutro/laravel-settings)

## Requirements

- PHP >= 5.6.4
- Laravel >= 5.3

## Installation

This plugin can only be installed from [Composer](https://getcomposer.org/).

Run the following command:
```
$ composer require imtigger/laravel-settings-ui
```

Add the following to your `config/app.php`:

```php
'providers' => [
    ...
    Imtigger\LaravelJobStatus\LaravelSettingsUIServiceProvider::class,
]
```

Add route to `web.php`

```php
Route::get('/setting', ['as' => 'laravel-settings-ui', 'uses' => '\\Imtigger\\LaravelSettingsUI\\Controller@get']);
Route::post('/setting', ['as' => 'laravel-settings-ui.post', 'uses' => '\\Imtigger\\LaravelSettingsUI\\Controller@post']);

```