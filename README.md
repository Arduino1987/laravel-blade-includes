# laravel-blade-includes
The set of view includes.

## Installation
```
composer require aghorianducalis/laravel-blade-includes
```

## Package Discovery
```
php artisan vendor:publish --provider="Aghorianducalis\BladeIncludes\BladeServiceProvider"
```
Note: *the above command will copy the views from ```vendor/aghorianducalis/laravel-blade-includes/src/views``` to ```resources/views/vendor/includes``` folder and register Blade directives for it.*

## Blade directives

```blade.php
@alertStatus @endalertStatus

@alertError @endalertError

@breadcrumb(['items' => ['Media' => url('admin/media'), 'Images' => url('admin/media/images')]]) @endbreadcrumb 
```
