## gaia-ui package
Publish the different css/js assets for the gaia CMS project as well as the master page layout.


#### Installation
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

#### Usage
Extend your views as you need 
```
@extends('admin.layout')
```


## Third patry packages
This package will also install other packages that will be used for some others gaia-packages.
* illuminate/html:  Work easily with blade form templates
* fzaninotto/Faker: Generates dummy data (database seeding)
* laracasts/flash: helper functions to set and get flash messages between controller methods
* intervention/image PHP image handling and manipulation library


####illuminate/html
register the service provider in config/app.php
```
Illuminate\Html\HtmlServiceProvider
```

reference the Form and Html facade in the aliases section in config/app.php
```
'Form' => 'Illuminate\Html\FormFacade', 
'Html' => 'Illuminate\Html\HtmlFacade'
```

####fzaninotto/Faker
```
use Faker\Factory as Faker;
$faker = Faker::create();
dd($faker->name);
```

####laracasts/flash
register the service provider in config/app.php
```
Laracasts\Flash\FlashServiceProvider
```
add the facade alias
```
 'Flash' => 'Laracasts\Flash\Flash'
``` 

####intervention/image
register the service provider in config/app.php
```
Intervention\Image\ImageServiceProvider
```
add the facade alias
```
'Image' => 'Intervention\Image\Facades\Image'
``` 