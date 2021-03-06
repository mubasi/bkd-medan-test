<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dataUser = [
            [
                'email' => 'admin@gmail.com',
                'name' => 'Admin',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('admin123'),
                'created_at' => Carbon::now(),
            ]
        ];
        // User::inse($dataUser);

        User::insert($dataUser);
    }
}
