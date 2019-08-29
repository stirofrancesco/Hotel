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
            [
                'name' => 'Jessie',
                'surname' => 'Mcwall',
                'email' => Str::random(10).'@gmail.com',
            ],
            [
                'name' => 'Pippo',
                'surname' => 'Pluto',
                'email' => Str::random(10).'@gmail.com',
            ],
            [
                'name' => 'Paperone',
                'surname' => 'Paperino',
                'email' => Str::random(10).'@gmail.com',
            ],
            [
                'name' => 'Qui',
                'surname' => 'Quo',
                'email' => Str::random(10).'@gmail.com',
            ],
            [
                'name' => 'Qua',
                'surname' => 'Fine fantasia',
                'email' => Str::random(10).'@gmail.com',
            ],
        ]);
    }
}
