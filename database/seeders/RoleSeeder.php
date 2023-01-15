<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Common\Entities\Role;
use Illuminate\Database\Eloquent\Model;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $roles = [
            [
                'role' => 'admin'
            ],
            [
                'role' => 'user'
            ]
            ];

        foreach ($roles as $item) {
            $role = Role::firstOrNew($item);
            $role->save();
        }

    }
}
