<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'Post 1',
            'content' => 'Content 1',
        ]);
        DB::table('posts')->insert([
            'title' => 'Post 2',
            'content' => 'Content 2',
        ]);
        DB::table('posts')->insert([
            'title' => 'Post 3',
            'content' => 'Content 3',
        ]);
    }
}
