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
        "unti1x/yii-phealng": "1.0.0"
    }
}
```

and then
```bash
composer install
```

Manual
------

Download and extract into your project's `protected/extensions` folder or
wherever you want.
Note that original PhealNG also required.


Configuration
=============

In your application config in components section:
```php
...
'phealng' => array(
    'class' => 'ext.YiiPhealNG',
    'pheal_class' => 'path/to/Pheal',
    'config' => (
        'keyId' => 'YOUR KEY ID HERE',
        'vCode' => 'YOUT VERIFICATION CODE HERE',
        'scope' => 'KEY SCOPE'
    )
)
...
```
 or
```php
...
'phealng' => array(
    'class' => 'ext.YiiPhealNG',
    'phealPath' => 'path/to/Pheal',
)
...
```

Usage
=====
```php
$pheal = Yii::app()->phealng;
// use it like you have direct access to Pheal object
var_dump($pheal->accountScope->ApiKeyInfo()->toArray());
```
or
```php
$pheal = Yii::app()->phealng;
$pheal->config = array(
    'keyId' => 'Your keyId',
    'vCode' => 'Your vCode',
);
var_dump($pheal->accountScope->ApiKeyInfo()->toArray());
```
License
=======
CC-BY-SA 4.0 but I don't really care.
