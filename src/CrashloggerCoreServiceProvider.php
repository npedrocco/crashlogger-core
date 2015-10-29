<?php

namespace Metide\CrashloggerCore;

use Illuminate\Support\ServiceProvider;

class CrashloggerCoreServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        dd('testing');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}