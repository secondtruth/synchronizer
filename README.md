FlameCore Synchronizer
======================

[![Latest Stable](http://img.shields.io/packagist/v/flamecore/synchronizer.svg)](https://packagist.org/packages/flamecore/synchronizer)
[![Scrutinizer](http://img.shields.io/scrutinizer/g/flamecore/synchronizer.svg)](https://scrutinizer-ci.com/g/flamecore/synchronizer)
[![License](http://img.shields.io/packagist/l/flamecore/synchronizer.svg)](https://packagist.org/packages/flamecore/synchronizer)

This library makes it easy to synchronize all kinds of things. It features a beautiful and easy to use API.

Synchronizer was developed as backend for our deployment and testing tool [Seabreeze](https://github.com/FlameCore/Seabreeze).


Implementations
---------------

The Synchronizer library is just an abstract foundation. But concrete implementations are available:

* [FilesSynchronizer](https://github.com/FlameCore/FilesSynchronizer)
* [DatabaseSynchronizer](https://github.com/FlameCore/DatabaseSynchronizer)


Usage
-----

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

Create your Synchronizer:

```php
class ExampleSynchronizer extends AbstractSynchronizer
{
    /**
     * @param bool $preserve Preserve obsolete objects
     * @return bool Returns whether the synchronization succeeded.
     */
    public function synchronize($preserve = true)
    {
        // Do the sync magic

        return true;
    }

    /**
     * @param SynchronizerSourceInterface $source The source
     * @return bool Returns whether the synchronizer supports the source.
     */
    public function supportsSource(SynchronizerSourceInterface $source)
    {
        return $source instanceof ExampleSource;
    }

    /**
     * @param SynchronizerTargetInterface $target The target
     * @return bool Returns whether the synchronizer supports the target.
     */
    public function supportsTarget(SynchronizerTargetInterface $target)
    {
        return $target instanceof ExampleTarget;
    }
}
```

Create your Source and Target:

```php
class ExampleSource implements SynchronizerSourceInterface
{
    /**
     * @param array $settings The settings
     */
    public function __construct(array $settings)
    {
        // Save settings
    }

    // Your methods...
}

class ExampleTarget implements SynchronizerTargetInterface
{
    /**
     * @param array $settings The settings
     */
    public function __construct(array $settings)
    {
        // Save settings
    }

    // Your methods...
}
```

Make your project compatible with Synchronizer:

```php
class Application
{
    protected $synchronizer;

    public function setSynchronizer(SynchronizerInterface $synchronizer)
    {
        $this->synchronizer = $synchronizer;
    }

    // ...
}
```


Installation
------------

### Install via Composer

[Install Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx) if you don't already have it present on your system:

    $ curl -sS https://getcomposer.org/installer | php

To install the library, run the following command and you will get the latest version:

    $ php composer.phar require flamecore/synchronizer


Requirements
------------

* You must have at least PHP version 5.4 installed on your system.


Contributing
------------

If you'd like to contribute, please see the [CONTRIBUTING](CONTRIBUTING.md) file first.
