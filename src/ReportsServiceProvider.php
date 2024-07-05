<?php

namespace Eaquinta\Reports;

use Illuminate\Support\ServiceProvider;
use Eaquinta\Reports\ReportGenerator;

class ReportsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('reports', function ($app) {
            return new ReportGenerator();
        });
    }
}
