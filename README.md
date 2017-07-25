# Laravel-AdminLTE-Lang

[![Latest Stable Version](https://poser.pugx.org/chewei05/laravel-adminlte-lang/v/stable)](https://packagist.org/packages/chewei05/laravel-adminlte-lang)
[![Total Downloads](https://poser.pugx.org/chewei05/laravel-adminlte-lang/downloads)](https://packagist.org/packages/chewei05/laravel-adminlte-lang)
[![Latest Unstable Version](https://poser.pugx.org/chewei05/laravel-adminlte-lang/v/unstable)](https://packagist.org/packages/chewei05/laravel-adminlte-lang)
[![License](https://poser.pugx.org/chewei05/laravel-adminlte-lang/license)](https://packagist.org/packages/chewei05/laravel-adminlte-lang)

    Traditional Chinese (zh-TW) Language for Laravel-AdminLTE with Laravel 5
    Laravel-AdminLTE 在 Laravel 5 的正體中文(繁體中文)語系檔.

## Requirements
    jeroennoten/laravel-adminlte: ^v1.19.0

## Installation
Open the root directory of your Laravel project in terminal(CLI), and follow the following steps.

1. Install [**jeroennoten/laravel-adminlte**](https://github.com/jeroennoten/Laravel-AdminLTE) first.
    ```
    composer require jeroennoten/laravel-adminlte
    ```
2. Install this package **laravel-adminlte-lang**
    ```
    composer require chewei05/laravel-adminlte-lang
    ```
## Copy Language Files

### Via Yourself
* Files of languages are in "vendor/chewei05/laravel-adminlte-lang/src/lang" directory
* Copy the folders of languages in the *resources/lang/vendor/adminlte* folder of your Laravel 5 project.

### Via Laravel Service Provider

1. Add service provider to **config/app.php**.
    ```php
    'providers' => [
        ...
        CheweiHu\LaravelAdminLTELang\LaravelAdminLTELangServiceProvider::class,
    ],
    ```
2. Run *composer dump-autoload* if composer went wrong.
    ```
    composer dump-autoload
    ```
3. Publish vendor files of this package.
    ```
    php artisan vendor:publish --provider="CheweiHu\LaravelAdminLTELang\LaravelAdminLTELangServiceProvider"
    ```
4. Done.
