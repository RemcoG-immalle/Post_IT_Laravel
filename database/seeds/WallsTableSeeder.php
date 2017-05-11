<?php

use Illuminate\Database\Seeder;

class WallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('walls')->insert([
        'wall_name' => str_random(10),
        'user_id' => 1,
      ]);

      DB::table('walls')->insert([
        'wall_name' => str_random(10),
        'user_id' => 2,
      ]);
    }
}
