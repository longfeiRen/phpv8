<?php
namespace Phpv8\Modules\Integral\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

// Models
use Phpv8\Modules\Integral\Models\Integral;
//use Phpv8\Modules\Integral\Models\ModuleTranslation;

// Repo
use Phpv8\Modules\Integral\Repositories\EloquentIntegral;


// Form
use Phpv8\Modules\Integral\Services\Form\IntegralForm;
use Phpv8\Modules\Integral\Services\Form\IntegralFormLaravelValidator;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        // Add dirs
        Lang::addNamespace('Integral',__DIR__.'/../Lang');
        //View::addNamespace('Module', __DIR__ . '/../Views');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('Integral', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->bind('Phpv8\Modules\Integral\Repositories\IntegralInterface', function (Application $app) {
            $repository = new EloquentIntegral(new Integral);
            //if (! Config::get('app.cache')) {
                return $repository;
            //}
            //$laravelCache = new LaravelCache($app['cache'], ['Module', 'galleries'], 10);

            //return new CacheDecorator($repository, $laravelCache);
        });

        $app->bind('Phpv8\Modules\Integral\Services\Form\IntegralForm', function (Application $app) {
            return new IntegralForm(
                new IntegralFormLaravelValidator($app['validator']),
                $app->make('Phpv8\Modules\Integral\Repositories\IntegralInterface')
            );
        });
        $app->before(function ($request, $response) {
            require __DIR__ . '/../breadcrumbs.php';
        });
    }

}
