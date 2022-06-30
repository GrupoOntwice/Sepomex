<?php

namespace Alkemy\Sepomex\Database\Seeders;

use Illuminate\Database\Seeder;

class ZipcodeSeeder extends Seeder
{
    public function run()
    {
        $path = __DIR__ . "/../Seeders/cp.sql";

        $user = " -u" . config('database.connections.mysql.username');
        $password = " -p" . config('database.connections.mysql.password');
        $host = " -h" . config('database.connections.mysql.host');
        $database = config('database.connections.mysql.database');

        $command = sprintf("mysql --default-character-set=utf8 %s %s %s %s < %s", $user, $password, $host, $database, $path);

        exec($command);
    }
}
