<?php

/*
|--------------------------------------------------------------------------
| Register The Module Class Loader
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
*/

ClassLoader::addDirectories(array(

	__DIR__ . '/../commands',
	__DIR__ . '/../controllers',
	__DIR__ . '/../models',
	__DIR__ . '/../database/seeds',

));

/*
|--------------------------------------------------------------------------
| Register The Module Namespaces
|--------------------------------------------------------------------------
|
| Here is you can register the namespace for this module.
| You may to edit this namespace if you want.
|
*/

View::addNamespace('usermanage', __DIR__ . '/../views/');

Lang::addNamespace('usermanage', __DIR__ . '/../lang/');

Config::addNamespace('usermanage', __DIR__ . '/../config/');

/*
|--------------------------------------------------------------------------
| Require Module Filters and Routes file.
|--------------------------------------------------------------------------
|
| Next, this module will load filters and routes file.
|
*/

require __DIR__ . '/../filters.php';

require __DIR__ . '/../routes.php';