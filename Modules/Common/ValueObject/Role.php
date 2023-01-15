<?php

declare(strict_types=1);

namespace Modules\Common\ValueObject;

class Role
{
    private const ADMIN = 'admin';
    private const USER = 'user';

    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function admin(): self
    {
        return new self(self::ADMIN);
    }

    public static function user(): self
    {
        return new self(self::USER);
    }

    public function getValue(): string
    {
        return $this->value;
    }
}