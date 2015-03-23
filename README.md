## gaia-ui package
Publish the different css/js assets for the gaia CMS project as well as the master page layout.


## Installation
Run the following command in your terminal 
```
composer require eandraos/gaia-ui
```

Then register this service provider with Laravel in config/app.php
```
Gaia\Ui\GaiaUiServiceProvider
```

Publish the assets and the master page view
```
php artisan vendor:publish
```

## Usage
Extend your views as you need 
```
@extends('admin.layout')
```
