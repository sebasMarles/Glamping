<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\CabinLevel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        CabinLevel::factory()->count(10)->create();
        
        $this->call([
            UserSeeder::class,
            CabinLevelSeeder::class,
        ]);
    }
}
