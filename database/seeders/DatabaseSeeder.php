<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\LekarSeeder;
use Database\Seeders\PacijentSeeder;
use Database\Seeders\PregledSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $lekarSeed = new LekarSeeder();
        $pacijentSeed = new PacijentSeeder();
        $pregledSeed = new PregledSeeder();

        $lekarSeed->run();
        $pacijentSeed->run();
        $pregledSeed->run();
    }
}
