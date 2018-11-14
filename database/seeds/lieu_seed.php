<?php

use Illuminate\Database\Seeder;

class lieu_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eval')->insert([
            'lieu' => str_random(10),
            'lieu' => str_random(10),
            'lieu' => str_random(10),
 
 
         ]);
    }
}
