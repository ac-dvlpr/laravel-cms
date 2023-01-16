<?php

declare(strict_types=1);

namespace Modules\Users\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Modules\Users\Http\Dto\PostDto;

class SavePostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:50',
            'content' => 'required|min:3|max:50000'
        ];
    }

    public function authorize(): bool
    {
        if(Gate::allows('save-post', $this->user())) {
            return true;
        }
        
        return false;
    }

    public function dto(): PostDto
    {
        return new PostDto(
            $this->user(),
            $this->post()
        );
    }

}