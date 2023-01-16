<?php

namespace Modules\Users\Http\Dto;

use App\Models\User;

class PostDto
{
    protected $user;
    protected $post;

    public function __construct(User $user, array $post) 
    {
        $this->user = $user;
        $this->post = $post;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getPost(): array
    {
        return $this->post;
    }
}