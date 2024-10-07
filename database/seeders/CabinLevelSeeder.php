<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class CabinLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cabin_levels')->insert([
            'name' => 'VIP',
            'descripcion' => 'Cabañas para gente con alto poder adquisitivo',
        ]);
        DB::table('cabin_levels')->insert([
            'name' => 'Basica',
            'descripcion' => 'Cabañas para gente normal',
        ]);
    }
}
