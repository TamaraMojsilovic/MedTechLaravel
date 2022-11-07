<?php

namespace Database\Seeders;

use App\Models\Lekar;
use Illuminate\Database\Seeder;

class LekarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lekar::factory()->count(50)->create();
    }
}
