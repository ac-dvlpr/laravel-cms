<?php

declare(strict_types=1);

namespace Modules\Common\ValueObject;

class Language
{
    private const POLISH = 'Polish';
    private const ENGLISH = 'English';

    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function polish(): self
    {
        return new self(self::POLISH);
    }

    public static function english(): self
    {
        return new self(self::ENGLISH);
    }

    public function getValue(): string
    {
        return $this->value;
    }
}