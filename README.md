# PHP Coding Style Guide

## Guide

See [Code Style Guide](code-style-guide.md) for more details.

## Fix code style

To manage code style, use PHP-CS-Fixer.

```shell
composer require "ba/php-cs"
```

Add the file `.php-cs-fixer.dist.php` to the root folder of the project:

```php
<?php
use PhpCsFixer\Finder;
use function BACodeStyle\styles;

$finder = (new Finder)
    ->in([
        __DIR__.'/src'
    ])
;

$config = styles($finder);

return $config
    ->setUsingCache(true)
    ->setCacheFile(__DIR__.'/.php-cs-fixer.cache');
```

Run fixer:

```shell
./vendor/bin/php-cs-fixer fix -vvv
```
