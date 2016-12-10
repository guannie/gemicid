<?php

use Illuminate\Database\Seeder;

class GenesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('genes')->get()->count() == 0){

            DB::table('genes')->insert([
            [
            ],
            ]);
         }
    }
}
