<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@moviplex.com';
        $user->password = bcrypt('123456789');
        $user->role = 'admin';

        $user->save();
    }

}
