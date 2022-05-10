<?php

declare(strict_types=1);

namespace PhpPatternLearning\AbstractFactory\Conceptual;

class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return 'The result of the product A1.';
    }
}
