<?php

namespace Alkemy\Sepomex;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . "/../src/Database/Migrations");
    }

    public function register()
    {

    }
}
