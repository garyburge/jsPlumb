# Yii2-jsPlumb

A fork of JsPlumb Component [repository](https://github.com/laboro/jsPlumb) which repackages the assets of the jsPlumb library [jsPlumb](http://jsplumb.org/).

Installation
------------
Add in `composer.json`:
```
{
    "require": {
        "garyburge/yii2-jsPlumb": "*"
    }
}
```

Usage
-----
In view
```php
<?
// ...

garyburge\jsPlumb\AssetBundle::register($this);

```

or as dependency in your asset bundle
```php
<?
// ...

class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'\rmrevin\yii\fontawesome\AssetBundle'
	];
}

```
