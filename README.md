Laravel 4.1 German Slug
========

Installation
-------
You should install this package through Composer.

Edit your project's `composer.json` file to require `pafelin/laravel4-german-slug`.

    "require": {
        "laravel/framework": "4.1.*",
        "pafelin/laravel4-german-slug": "dev-master"
    },
    "minimum-stability" : "dev"

Next, update Composer from the Terminal:
    `composer update`

Once this operation completes, the final step is to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

  `'Pafelin\Laravel4GermanSlug\SlugServiceProvider',`

And add a new item to the aliases array.

  `'Slug' => 'Pafelin\Laravel4GermanSlug\Facades\Slug',`

Usage
-------
Call of the method: `Slug::make($text)`

Call of the method with specific separator: `Slug::make($text, '_')`.

License
-------

The MIT License (MIT)

Copyright (c) 2013 Pavel Genov