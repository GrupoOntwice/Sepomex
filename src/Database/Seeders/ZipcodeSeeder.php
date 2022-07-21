<?php

namespace Alkemy\Sepomex\Database\Seeders;

use Illuminate\Database\Seeder;

class ZipcodeSeeder extends Seeder
{
    public function run()
    {
        $path = __DIR__ . "/../Seeders/cp.sql";

        \DB::unprepared(file_get_contents($path));
    }
}
