<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

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
          $user = User::create([
          'name'=>'Ale',
          'email'=>'ale@ale.com',          
          'password'=>Hash::make('ale1'),          
          'role_id'=>0,

        ]);
        $user = User::create([
          'name'=>'Admin',
          'email'=>'admin@admin.com',          
          'password'=>Hash::make('admin'),          
          'role_id'=>1,

        ]);
       
    }
}
