yii-phealng
===========

PhealNG wrapper for Yii Framework

Installation
============

via Composer
------------

```bash
composer require unti1x/yii-phealng
```

or modify composer.json:

```json
{
    "require": {
        "3rdpartyeve/phealng": "dev-master"
    }
}
```

and then
```bash
composer install
```

manual
------

Download and extract into your project's `protected/extensions` folder or
wherever you want.
Note that original PhealNG also required.


Configuration
=============

In your application config in components section:
```php
[
	'phealng' => [
		'class' => 'ext.YiiPhealNG',
		'pheal_class' => 'path/to/Pheal',
		'config' => [
			'keyID' => 'YOUR KEY ID HERE',
			'vCode' => 'YOUT VERIFICATION CODE HERE',
			'scope' => 'KEY SCOPE'
		]
	]
]
```

Usage
=====

```php
$pheal = Yii::app()->phealng;
// use in like Pheal
var_dump($pheal->accountScope->ApiKeyInfo()->toArray())
```

License
=======
CC-BY-SA 4.0 but I don't really care.
