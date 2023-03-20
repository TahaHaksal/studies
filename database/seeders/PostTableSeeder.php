<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(range(1,100) as $index){
            DB::table('posts')->insert([
                'title' => fake()->sentence(2),
                'body' => fake()->paragraph(5)
            ]);
        }
    }
}
