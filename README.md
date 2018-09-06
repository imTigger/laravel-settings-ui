# Laravel Settings UI
Simple UI for [anlutro/laravel-settings](https://github.com/anlutro/laravel-settings)

## Requirements

- PHP >= 5.6.4
- Laravel >= 5.3
- [anlutro/laravel-settings](https://github.com/anlutro/laravel-settings) must be properly installed
- [kristijanhusak/laravel-form-builder](https://github.com/kristijanhusak/laravel-form-builder) must be properly installed

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
    Imtigger\LaravelSettingsUI\LaravelSettingsUIServiceProvider::class,
]
```

Add route to `web.php`

```php
Route::get('/setting', ['as' => 'laravel-settings-ui', 'uses' => '\\Imtigger\\LaravelSettingsUI\\Controller@get']);
Route::post('/setting', ['as' => 'laravel-settings-ui.post', 'uses' => '\\Imtigger\\LaravelSettingsUI\\Controller@post']);

```

Publish config, form and view
```bash
php artisan vendor:publish --provider="Imtigger\LaravelSettingsUI\LaravelSettingsUIServiceProvider" 
```

### Usage

Edit `app/Forms/LaravelSettingsForm.php` to add/remove fields

All fields in this `Form` is automagically saved

Edit `resources\views\vendor\laravel-settings-ui\settings.blade.php` to adapt it to your favorite theme!

Final word: Remember use middleware to protect routes 

[Laravel Form Builder Documentations](http://kristijanhusak.github.io/laravel-form-builder/)

[Laravel Settings Documentations](https://github.com/anlutro/laravel-settings)
