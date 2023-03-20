<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call([
        //     PostTableSeeder::class,
        // ]);
        foreach(range(1,1000) as $indes){
            DB::table('users')->insert([
                'name' => fake()->name(),
                'email' => fake()->email(),
                'password' => password_hash(fake()->password(), PASSWORD_DEFAULT),
            ]);
        }
    }
}
