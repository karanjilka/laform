Laravel form builder for Laravel 5

# Installation
Require this package in your `composer.json` and update composer. This will download the package.
```php
"karan/laform": "dev-master"
```
Then add Service provider to config/app.php
```php
Karan\Laform\LaformServiceProvider::class,
```
And Facade (also in config/app.php)
```php
'Laform'    => Karan\Laform\Facade::class
```
