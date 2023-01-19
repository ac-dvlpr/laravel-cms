<?php

namespace Modules\Users\Http\Dto;

use App\Models\User;

class ShowPostDto
{
    protected $user;
    protected $post;

    public function __construct(User $user) 
    {
        $this->user = $user;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}