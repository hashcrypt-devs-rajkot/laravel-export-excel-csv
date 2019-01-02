<?php

namespace Hashcrypt\Export;

use Illuminate\Support\ServiceProvider;

class ExportProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('export', 'Hashcrypt\Export\Export' );
    }
}
