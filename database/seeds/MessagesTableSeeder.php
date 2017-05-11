<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('messages')->insert([
        'user_id' => 1,
        'wall_id' => 1,
        'content' => str_random(50),
      ]);

      DB::table('messages')->insert([
        'user_id' => 3,
        'wall_id' => 2,
        'content' => str_random(50),
      ]);

      DB::table('messages')->insert([
        'user_id' => 2,
        'wall_id' => 1,
        'content' => str_random(50),
      ]);
    }
}
