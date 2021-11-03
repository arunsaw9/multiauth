<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Arun saw',
            'email' => 'arunsaw0@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
