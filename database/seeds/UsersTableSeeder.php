<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => "Remco",
        'email' => 'remco@gmail.com',
        'password' => bcrypt('password'),
      ]);

      DB::table('users')->insert([
        'name' => "Sander",
        'email' => 'sander@gmail.com',
        'password' => bcrypt('password'),
      ]);

      DB::table('users')->insert([
        'name' => "Admin",
        'email' => 'admin@gmail.com',
        'password' => bcrypt('password'),
      ]);
    }
}
