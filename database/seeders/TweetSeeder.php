<?php

namespace Database\Seeders;

use App\Models\Tweet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tweet::factory()->count(400)->create([
            'created_by' => 1,
            'body' => fake()->sentence(10),
        ]);

        $this->call([
            TweetSeeder::class,
        ]);
    }
}
