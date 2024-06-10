<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
                'title' => 'something',
                'body' => 'ナントカカントカ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
