<?php

declare(strict_types=1);

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $fillable = [
        'id',
        'role'
    ];

    public function getId(): int
    {
        return $this->id;
    }
}