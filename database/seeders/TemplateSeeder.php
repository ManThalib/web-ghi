<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('regis')->insert([
            'nama_lengkap' => 'user lengkap',
            'user_id' => '1',
        ]);
        DB::table('uploads')->insert([
            'user_id' => '1',
            'slug' => '',
            'fileTitle' => '',
            'fileName' => '',
        ]);

        DB::table('superusers')->insert([
            'name' => 'superuser',
            'email' => 'superuser@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
