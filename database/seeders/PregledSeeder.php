<?php

namespace Database\Seeders;

use App\Models\Pregled;
use Illuminate\Database\Seeder;

class PregledSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pregled::factory()->count(100)->create();
    }
}
