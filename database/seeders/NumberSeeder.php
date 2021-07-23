<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Number;

class NumberSeeder extends Seeder
{

    public function run()
    {
        \App\Models\Number::factory(100)->create();
    }
}
