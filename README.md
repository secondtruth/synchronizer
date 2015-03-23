FlameCore Synchronizer
======================

[![Code Climate](http://img.shields.io/codeclimate/github/FlameCore/Synchronizer.svg)](https://codeclimate.com/github/FlameCore/Synchronizer)
[![License](http://img.shields.io/packagist/l/flamecore/synchronizer.svg)](https://packagist.org/packages/flamecore/synchronizer)

This library makes it easy to synchronize all kinds of things. It features a beautiful and easy to use API.

Synchronizer was developed as backend for our deployment and testing tool [Seabreeze](https://github.com/FlameCore/Seabreeze).


Implementations
---------------

The Synchronizer library is just an abstract foundation. But concrete implementations are available:

* [FilesSynchronizer](https://github.com/FlameCore/FilesSynchronizer)
* [DatabaseSynchronizer](https://github.com/FlameCore/DatabaseSynchronizer)


Installation
------------

### Install via Composer

Create a file called `composer.json` in your project directory and put the following into it:

```
{
    "require": {
        "flamecore/synchronizer": "0.1.*"
    }
}
```

[Install Composer](https://getcomposer.org/doc/00-intro.md#installation-nix) if you don't already have it present on your system:

    curl -sS https://getcomposer.org/installer | php

Use Composer to [download the vendor libraries](https://getcomposer.org/doc/00-intro.md#using-composer) and generate the vendor/autoload.php file:

    php composer.phar install

Include the vendor autoloader and use the classes:

```php
namespace Acme\MyApplication;

// To create a Synchronizer:
use FlameCore\Synchronizer\AbstractSynchronizer;
use FlameCore\Synchronizer\SynchronizerSourceInterface;
use FlameCore\Synchronizer\SynchronizerTargetInterface;

// To make your project compatible with Synchronizer:
use FlameCore\Synchronizer\SynchronizerInterface;

require 'vendor/autoload.php';
```


Requirements
------------

* You must have at least PHP version 5.4 installed on your system.


Contributors
------------

If you want to contribute, please see the [CONTRIBUTING](CONTRIBUTING.md) file first.

Thanks to the contributors:

* Christian Neff (secondtruth)
