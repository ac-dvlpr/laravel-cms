<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Users\Entities\User;
use Illuminate\Support\Facades\Hash;
use Modules\Common\ValueObject\Role;
use Modules\Common\Entities\Role as RoleModel;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $roleId = RoleModel::select('id')->where('role', Role::admin()->getValue())->get();

        User::query()->create([
            'name' => 'Admin',
            'email' => config('admin.default_admin_mail'),
            'password' => Hash::make(config('admin.default_admin_password')),
            'role_id' => $roleId->pluck('id')[0]
        ]);
    }
}
