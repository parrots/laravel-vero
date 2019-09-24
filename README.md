laravel-vero
---

# About
This library adapts the Vero PHP library for Laravel. It provides a service container and facade for easy access.

# Requirements

- PHP 7.1+
- Laravel 5.6+
- json extension // Undocumented requirement of the underlying library
- curl extension // Undocumented requirement of the underlying library

# Installation

- Install the library with composer

`composer require samlittler/laravel-vero`

- Store an auth_token key in your `config/services.php`

```php
return [
    ...
    'vero' => [
        'auth_token' => env('VERO_AUTH_TOKEN'),
    ],
];
```

- Lastly, add your Vero auth token to your `.env`

```php
VERO_AUTH_TOKEN="your auth token here"
```

# Usage

```php
\LaravelVero::identify('test-user-id');
```
