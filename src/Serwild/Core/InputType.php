<?php
declare(strict_types=1);

namespace Ferror\Serwild\Core;

final class InputType
{
    public const INT = 'INT';
    public const STRING = 'STR';
    public const ARRAY = 'ARR';
    public const FLOAT = 'FLO';

    private string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function is(self $inputType): bool
    {
        return $this->type === $inputType->type;
    }
}
