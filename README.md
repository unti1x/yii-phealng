yii-phealng
===========

Yii Wrapper for PhealNG


Installation
============

via Composer
------------

```
composer require unti1x/yii-phealng
```

or modify composer.json:

```
{
    "require": {
        "3rdpartyeve/phealng": "dev-master"
    }
}
```

and then
```
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
```
	'phealng' => [
		'class' => 'ext.YiiPhealNG',
		'pheal_class' => 'path/to/Pheal',
		'config' => [
			'keyID' => 'YOUR KEY ID HERE',
			'vCode' => 'YOUT VERIFICATION CODE HERE',
			'scope' => 'KEY SCOPE'
		]
	]
```

License
=======
CC-BY-SA 4.0 but I don't really care.
