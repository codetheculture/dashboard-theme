<?php

namespace Culture\Dashboard;

use Illuminate\Support\ServiceProvider;

class DashboardThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-theme');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
