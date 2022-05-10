<?php

declare(strict_types=1);

namespace PhpPatternLearning\AbstractFactory\Conceptual;

class ConcreteFactory1 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1();
    }
}
