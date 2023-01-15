<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// use Modules\Common\Entities\Role;
use Modules\Common\Entities\Role as RoleModel;
use Modules\Common\ValueObject\Role;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getId(): int
    {
        return $this->id;
    }

    public function getRoleId(): int
    {
        return $this->role_id;
    }

    public function hasRoleAdmin(): bool
    {
        if(RoleModel::select('role')->where('id', $this->getRoleId())->pluck('role')[0] === Role::admin()->getValue()) {
            return true;
        }

        return false;
    }
}
