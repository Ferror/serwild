<?php
declare(strict_types=1);

namespace Ferror\Serwild\Core;

final class Input
{
    private array $bag = [];

    public function get(string $name, InputType $inputType): string|array|int|float
    {
        if ($inputType->is(new InputType(InputType::INT))) {
            return (int) $this->bag[$name];
        }

        if ($inputType->is(new InputType(InputType::FLOAT))) {
            return (float) $this->bag[$name];
        }

        if ($inputType->is(new InputType(InputType::STRING))) {
            return (string) $this->bag[$name];
        }

        if ($inputType->is(new InputType(InputType::ARRAY))) {
            return (array) $this->bag[$name];
        }

        throw new \RuntimeException('Parameter not found');
    }
}
