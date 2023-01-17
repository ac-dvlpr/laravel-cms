<?php

declare(strict_types=1);

namespace Modules\Common\ValueObject;

class Language
{
    private const POLISH = 'Polish';
    private const PL = 'pl';
    private const ENGLISH = 'English';
    private const EN = 'en';

    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function polish(): self
    {
        return new self(self::POLISH);
    }

    public static function pl(): self
    {
        return new self(self::PL);
    }

    public static function english(): self
    {
        return new self(self::ENGLISH);
    }

    public static function en(): self
    {
        return new self(self::EN);
    }

    public function getValue(): string
    {
        return $this->value;
    }
}