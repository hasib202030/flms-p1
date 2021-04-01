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
        // Test User
        $user = User::where('email', 'excelitai@gmail.com')->first();
        if(is_null($user)){

            $user = new User();
            $user->name = "Excel IT AI ";
            $user->email = "excelitai@gmail.com";
            $user->password = Hash::make('12345678');
            $user->save();
        }

    }
}
