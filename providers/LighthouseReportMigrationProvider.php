<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class LighthouseReportMigrationProvider
 * @package App\Providers
 */
class LighthouseReportMigrationProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }
}
