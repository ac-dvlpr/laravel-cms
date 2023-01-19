<?php

declare(strict_types=1);

namespace Modules\Users\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Users\Http\Dto\ShowPostDto;

class ShowPostRequest extends FormRequest
{
    public function rules(): array
    {
        return [];
    }

    public function dto(): ShowPostDto
    {
        return new ShowPostDto(
            $this->user()
        );
    }
}