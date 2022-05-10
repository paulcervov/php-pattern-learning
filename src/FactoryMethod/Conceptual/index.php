<?php

declare(strict_types=1);

require __DIR__ . '/../../../vendor/autoload.php';

use PhpPatternLearning\FactoryMethod\Conceptual\Creator;
use PhpPatternLearning\FactoryMethod\Conceptual\ConcreteCreator1;
use PhpPatternLearning\FactoryMethod\Conceptual\ConcreteCreator2;

function clientCode(Creator $creator): void
{
    echo "Client: I'm not aware of the creator's class, but it still works." . PHP_EOL . $creator->someOperation();
}

echo "App: Launched with the ConcreteCreator1." . PHP_EOL;
clientCode(new ConcreteCreator1());
echo PHP_EOL;

echo "App: Launched with the ConcreteCreator2." . PHP_EOL;
clientCode(new ConcreteCreator2());
echo PHP_EOL;
