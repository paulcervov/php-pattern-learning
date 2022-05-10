<?php

declare(strict_types=1);

namespace PhpPatternLearning\FactoryMethod\Conceptual;

class ConcreteProduct1 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}
