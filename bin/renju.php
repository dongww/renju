<?php
#!/usr/bin/env php
require __DIR__.'/../vendor/autoload.php';

use Dongww\Renju\Command\FileCommand;
use Dongww\Renju\Command\InputCommand;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new InputCommand());
$application->add(new FileCommand());
$application->run();