<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    DB::table('users')->insert([
        'name' => 'Mohammad Ibrahim',
        'email' => 'admin@bdnest.com',
        'password' => bcrypt('123456789'),
        'admin'=>'1',
    ]);


    }
}
