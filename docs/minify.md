# Minify

[![Build Status](https://travis-ci.org/ceesvanegmond/minify.svg?branch=master)](https://travis-ci.org/ceesvanegmond/minify)

With this package you can minify your existing stylessheet and javascript files. This process can be a little tough, this package simplies this process and automates it.

## Installation

Begin by installing this package through Composer.

```js
{
    "require": {
    	"ceesvanegmond/minify": "2.0.*"
	}
}
```

### Laravel installation
```php

// app/config/app.php

'providers' => [
    '...',
    'CeesVanEgmond\Minify\MinifyServiceProvider',
];
```

When you've added the ```MinifyServiceProvider``` an extra ```Minify``` facade is available.
You can use this Facade anywhere in your application

#### Stylesheet
```php
// app/views/hello.blade.php

<html>
	<head>
		...
		{{ Minify::stylesheet('/css/main.css') }}
		//or by passing multiple files
		{{ Minify::stylesheet(array('/css/main.css', '/css/bootstrap.css')) }}
	</head>
	...
</html>

```

#### Javascript
```php
// app/views/hello.blade.php

<html>
	<body>
	...
	</body>
	{{ Minify::javascript('/js/jquery.js') }}
	//or by passing multiple files
	{{ Minify::javascript(array('/js/jquery.js', '/js/jquery-ui.js')) }}
</html>

```

### Config
```php
<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | App environments to not minify
    |--------------------------------------------------------------------------
    |
    | These environments will not be minified
    |
    */

    'ignore_envionments' => array(
	     'local',
    ),

    /*
    |--------------------------------------------------------------------------
    | CSS path and CSS build path
    |--------------------------------------------------------------------------
    |
    | Minify is an extention that can minify your css files into one build file.
    | The css_path property is the location where your CSS files are located
    | The css_builds_path property is the location where the builded files are
    | stored.  THis is relative to the css_path property.
    |
    */

    'css_build_path' => '/css/builds/',

    /*
    |--------------------------------------------------------------------------
    | JS path and JS build path
    |--------------------------------------------------------------------------
    |
    | Minify is an extention that can minify your JS files into one build file.
    | The JS_path property is the location where your JS files are located
    | The JS_builds_path property is the location where the builded files are
    | stored.  THis is relative to the css_path property.
    |
    */

    'js_build_path' => '/js/builds/',

);
```

### Without Laravel

```php
<?php
$config = array(
	'ignore_envionments' => 'local',
	'js_build_path' => '/js/builds/',
	'css_builds_path' => '/css/builds',
)
$minify = new CeesVanEgmond\Minify\Providers\Javascript($public_path);
$minify->add($file)

if (in_array($environment, $config['ignore_envionments']))
{
    return $provider->tags();
}

if ( ! $minify->make($config['css_build_path'] ) {
	$filename = $provider->tag($config['css_build_path'] . $provider->getFilename());
}

$provider->minify();

$filename = $provider->tag($config['css_build_path'] . $provider->getFilename());
        
```
