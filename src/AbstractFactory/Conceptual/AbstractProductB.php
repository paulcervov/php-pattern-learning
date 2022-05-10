<?php

declare(strict_types=1);

namespace PhpPatternLearning\AbstractFactory\Conceptual;

interface AbstractProductB
{
    public function usefulFunctionB(): string;

    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string;
}
