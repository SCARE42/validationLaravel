<?php

use Illuminate\Database\Seeder;

class nom_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eval')->insert([
            'nom' => 'Orelsan',

            'nom' => 'DaftPunk',
 
            'nom' => 'Nekfeu',
 
         ]);
    }
}
