<?php

use Edem\TestCodecov\App\Init;

require_once './vendor/autoload.php';

printf((new Init())->hello());
printf((new Init())->bye());