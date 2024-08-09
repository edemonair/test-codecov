<?php

declare(strict_types=1);

namespace Edem\TestCodecov\App;

class Init
{
    public function hello(): string
    {
        return 'Hello!' . "\n";
    }

    public function bye(): string
    {
        return 'Bye!'. "\n";
    }

    public function ask(): string
    {
        return 'How are you?'. "\n";
    }

    public function greeting(): string
    {
        return 'Hey! You are looking good today'. "\n";
    }

    public function comment(): string
    {
        return 'Meeeh'. "\n";
    }
}