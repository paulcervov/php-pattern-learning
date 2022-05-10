<?php

declare(strict_types=1);

require __DIR__.'/../../../vendor/autoload.php';

use PhpPatternLearning\AbstractFactory\Conceptual\AbstractFactory;
use PhpPatternLearning\AbstractFactory\Conceptual\ConcreteFactory1;
use PhpPatternLearning\AbstractFactory\Conceptual\ConcreteFactory2;

function clientCode(AbstractFactory $factory): void
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productA->usefulFunctionA().PHP_EOL;

    echo $productB->usefulFunctionB().PHP_EOL;
    echo $productB->anotherUsefulFunctionB($productA).PHP_EOL;
}

echo 'Client: Testing client code with the first factory type.'.PHP_EOL;
clientCode(new ConcreteFactory1());
echo PHP_EOL;

echo 'Client: Testing the same client code with the second factory type.'.PHP_EOL;
clientCode(new ConcreteFactory2());
echo PHP_EOL;
