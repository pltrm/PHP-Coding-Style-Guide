<?php

namespace BACodeStyle;

use PhpCsFixer\Config;
use PhpCsFixer\ConfigInterface;
use PhpCsFixer\Finder;

function styles(Finder $finder, array $rules = []): ConfigInterface
{
    $rules = array_merge(require __DIR__.'/rules.php', $rules);

    return (new Config)
        ->setFinder($finder)
        ->setRiskyAllowed(true)
        ->setRules($rules);
}
