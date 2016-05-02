<?php
require_once __DIR__ . '/vendor/glady/behind/src/glady/Behind/ClassLoader/ClassLoader.php';
$classLoader = new \glady\Behind\ClassLoader\ClassLoader();
$classLoader->addComposerVendorAutoloadRules(__DIR__ . '/vendor');
$classLoader->register();
