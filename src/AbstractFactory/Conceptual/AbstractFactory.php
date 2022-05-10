<?php

declare(strict_types=1);

namespace PhpPatternLearning\AbstractFactory\Conceptual;

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}
