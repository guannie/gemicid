<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('users')->get()->count() == 0){

            DB::table('users')->insert([
            [ 
            'username' => 'admin',
            'phone' => '+60123456789',
            'email' => 'admin@gemicid.com',
            'password' => bcrypt('123456'),
            'admin' => '1',
            'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
            ],
            [
            'username' => 'user',
            'phone' => '+60987654321',
            'email' => 'user@gemicid.com',
            'password' => bcrypt('123456'),
            'admin' => '0',
            'created_at' => Carbon::now(),
           	'updated_at' => Carbon::now(),
            ],
            ]);
         }
    }
}
