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
        'wall_name' => "Sport",
        'user_id' => 1,
      ]);

      DB::table('walls')->insert([
        'wall_name' => "Gaming",
        'user_id' => 2,
      ]);
    }
}
