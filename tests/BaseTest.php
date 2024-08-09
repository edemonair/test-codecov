<?php

declare(strict_types=1);

namespace Tests;

use Edem\TestCodecov\App\Init;
use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase
{
    /**
     * @covers \Edem\TestCodecov\App\Init::hello()
     */
    public function testInitHello(): void
    {
        $init = new Init();

        self::assertSame('Hello!' . "\n", $init->hello());
    }
}