<?php

namespace Database\Seeders;

use App\Models\Rashod;
use Illuminate\Database\Seeder;

class RashodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rashod::factory(10)->create();
    }
}
