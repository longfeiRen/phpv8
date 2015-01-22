<?php
namespace Phpv8\Modules\Dashboard\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        Lang::addNamespace('Dashboard',__DIR__.'/../Lang');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('Dashboard', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->before(function ($request, $response) {
            require __DIR__ . '/../breadcrumbs.php';
        });
    }

}
