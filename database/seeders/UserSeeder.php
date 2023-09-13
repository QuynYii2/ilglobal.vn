<?php

namespace Database\Seeders;

use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Super Admin',
                'address' => 'Ha Noi',
                'avt' => 'https://demoda.vn/wp-content/uploads/2022/08/hinh-anh-avatar-nu-de-thuong.jpg',
                'email' => 'admin@gmail.com',
                'phoneNumber' => '0868955551',
                'status' => UserStatus::ACTIVE,
                'role_id' => 1,
                'password' => Hash::make('APP_PASSWORD_DEFAULT', '123123') ,
            ],
            [
                'name' => 'Super User',
                'address' => 'Ha Noi',
                'avt' => 'https://demoda.vn/wp-content/uploads/2022/08/hinh-anh-avatar-nu-de-thuong.jpg',
                'email' => 'user@gmail.com',
                'phoneNumber' => '0868955551',
                'status' => UserStatus::ACTIVE,
                'role_id' => 2,
                'password' => Hash::make('APP_PASSWORD_DEFAULT', '123123') ,

            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }

}
