<?php

declare(strict_types=1);

namespace Modules\Common\Http\Dto;

class ContactFormDto
{
    protected $name;
    protected $email;
    protected $message;

    public function __construct(string $name, string $email, string $message) 
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}