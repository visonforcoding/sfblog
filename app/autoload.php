<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

//$loader->add('my\page',__DIR__ . '/../vendor/my/page');

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
