<?php
/*
 * This file is part of the Behind-Project (https://github.com/glady/Behind).
 *
 * (c) Mike Gladysch <mail@mike-gladysch.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * This test should provide that after requiring class loader and call "addComposerVendorAutoloadRules" with vendor dir
 *  should be able to load each class of Behind-project
 */
class AutoloadBehindClassesTest extends PHPUnit_Framework_TestCase
{
    public function testBehindClassExists()
    {
        $this->assertTrue(class_exists('\glady\Behind'));
    }
}
