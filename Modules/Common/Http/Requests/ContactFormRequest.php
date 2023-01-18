<?php

declare(strict_types=1);

namespace Modules\Common\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Common\Http\Dto\ContactFormDto;

class ContactFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:50',
            'email' => 'required|min:3|max:50|email:rfc',
            'message' => 'required|min:10|max:1000'
        ];
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

    public function dto(): ContactFormDto
    {
        return new ContactFormDto(
            $this->getName(),
            $this->getEmail(),
            $this->getMessage()
        );
    }
}