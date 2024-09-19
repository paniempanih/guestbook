<?php

namespace Database\Seeders;

use App\Models\Institution;
use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Institution::create(['name' => 'Perusahaan']);
        Institution::create(['name' => 'Dinas']);
        Institution::create(['name' => 'Sekolahan']);

        Guest::factory(100)->create();
        
    }
}
