# server
Server package for Bone Mvc Framework
## installation
Use Composer
```
composer require delboy1978uk/bone-server
```
## usage
Simply add to the `config/packages.php`
```php
<?php

// use statements here
use Bone\Server\ServerPackage;

return [
    'packages' => [
        // packages here...,
        ServerPackage::class,
    ],
    // ...
];
```