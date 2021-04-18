<?php
declare(strict_types=1);

namespace Tests\CheckDockerEnvironment;

use PHPUnit\Framework\TestCase;

class PhpUnitTest extends TestCase
{
    public function test_phpunit_execution_succeeded()
    {
        $this->assertTrue(true);
    }
}
