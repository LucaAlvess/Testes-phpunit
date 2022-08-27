<?php

use PHPUnit\Framework\TestCase;

class EnviromentTest extends TestCase
{
    public function testInclude()
    {
        $this->assertTrue(
            file_exists(__DIR__.'/config.php')
        );
    }
}