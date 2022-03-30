<?php

declare(strict_types=1);

namespace PhpPatternLearning\FactoryMethod\Conceptual;

class ConcreteCreator1 extends Creator
{
    function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}