<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BookersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookers')->insert([
            'name' => 'Jessie',
            'surname' => 'Mcwall',
            'email' => Str::random(10).'@gmail.com',
        ]);
    }
}
