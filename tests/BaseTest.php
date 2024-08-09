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

    /**
     * @covers \Edem\TestCodecov\App\Init::bye()
     */
    public function testInitBye(): void
    {
        $init = new Init();

        self::assertSame('Bye!' . "\n", $init->bye());
    }

    /**
     * @covers \Edem\TestCodecov\App\Init::ask()
     */
    public function testInitAsk(): void
    {
        $init = new Init();

        self::assertSame('How are you?!' . "\n", $init->ask());
    }
}