<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $Admins= [

    ['name'=>'admin admin', 'email'=>'admin@gmail.com', 'password'=>Hash::make('12345678') ],
    ['name'=>'kamrul Hassan', 'email'=>'kamrul@gmail.com', 'password'=>Hash::make('12345678') ],


       ];

       Admin::insert($Admins);
    }
}
