<?php

namespace Database\Seeders;

use App\Enums\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles =[
            ['name'=>Role::ADMIN],
            ['name'=>Role::USER]
        ];
        foreach ($roles as $role){
            \App\Models\Role::create($role);
        }
    }
}
