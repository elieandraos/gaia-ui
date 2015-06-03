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

Migrate the database (users table)
```
php artisan migrate
```

Seed the users table 
```
php artisan db:seed --class=UsersTableSeeder
```
login with gaia@mcsaatchi.me 123456

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
* zizaco/entrust Role-based permissions for Laravel 5
* spatie/laravel-medialibrary: associate all sorts of files with Eloquent models
* vinkla/translator: Laravel translator for Eloquent objects


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


####zizaco/entrust
register the service provider in config/app.php
```
'Zizaco\Entrust\EntrustServiceProvider'
```
add the facade alias
```
'Entrust' => 'Zizaco\Entrust\EntrustFacade'
``` 

generate the migrations
```
php artisan entrust:migration
```
migrate
```
php artisan migrate
```
edit the user model class
```
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Eloquent
{
    use EntrustUserTrait; // add this trait to your user model

    ...
}
```
dump the auto-load 
```
composer dump-autoload
```
last, add the follwing property to the AuthController 
```
protected $redirectPath = '/admin/dashboard';
```


####spatie/laravel-medialibrary
register the service provider in config/app.php
```
'Spatie\MediaLibrary\MediaLibraryServiceProvider'
```
add the facade alias
```
'MediaLibrary' => 'Spatie\MediaLibrary\MediaLibraryFacade',
``` 
migrate
```
php artisan migrate
```
create "media" folder in the public directory


####vinkla/translator
register the service provider in config/app.php
```
'Vinkla\Translator\TranslatorServiceProvider'
```
publish the migration and configuration files
```
php artisan vendor:publish
``` 
Edit the configuration in config/translator.php
```
'locale' => 'App\Models\Locale'
```
migrate
```
php artisan migrate
composer dump-autoload -o
```
Seed the locales
```
php artisan db:seed --class=LocalesTableSeeder
```










