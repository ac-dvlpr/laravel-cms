<?php

declare(strict_types=1);

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    public $fillable = [
        'id',
        'role'
    ];

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->role;
    }
}