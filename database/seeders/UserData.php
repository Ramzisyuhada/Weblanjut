<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = ser [
            [
                'name'=> 'admin',
                'email' =>'admin@laundry.gmail',
                'password' => bcrypt('123456'),
                'role' => '1',
            ]
            ];
      foreach ($user as $key => $value){
        User::create($value);
      }
    }
}
