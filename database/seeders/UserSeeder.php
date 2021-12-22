<?php

namespace Database\Seeders;

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
    public function run()
    {
        $user = new User();
        $user->name = 'Fitria Amelia';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name = 'Dina Amelia';
        $user->email = 'member@gmail.com';
        $user->password = Hash::make('87654321');
        $user->save();

        $user = new User();
        $user->name = 'Kesyza Andriana';
        $user->email = 'key@gmail.com';
        $user->password = Hash::make('11112222');
        $user->save();

        $user = new User();
        $user->name = 'Rika Fitriyani';
        $user->email = 'rika@gmail.com';
        $user->password = Hash::make('22223333');
        $user->save();

        $user = new User();
        $user->name = 'Sila';
        $user->email = 'sila@gmail.com';
        $user->password = Hash::make('33334444');
        $user->save();

        $user = new User();
        $user->name = 'Silvi';
        $user->email = 'silvi@gmail.com';
        $user->password = Hash::make('44445555');
        $user->save();

    }
}
