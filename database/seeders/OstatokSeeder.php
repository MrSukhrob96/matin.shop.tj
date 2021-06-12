<?php

namespace Database\Seeders;

use App\Models\Ostatok;
use Illuminate\Database\Seeder;

class OstatokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ostatok::factory(10)->create();
    }
}
