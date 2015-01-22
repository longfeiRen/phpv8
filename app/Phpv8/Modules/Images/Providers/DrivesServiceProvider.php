<?php
namespace Phpv8\Modules\Images\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

// Models
use Phpv8\Modules\Images\Models\Images;
//use Phpv8\Modules\Images\Models\ModuleTranslation;

// Repo
use Phpv8\Modules\Images\Repositories\EloquentImages;


// Form
use Phpv8\Modules\Images\Services\Form\ImagesForm;
use Phpv8\Modules\Images\Services\Form\ImagesFormLaravelValidator;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        // Add dirs
        Lang::addNamespace('Images',__DIR__.'/../Lang');
        //View::addNamespace('Module', __DIR__ . '/../Views');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('Images', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->bind('Phpv8\Modules\Images\Repositories\ImagesInterface', function (Application $app) {
            $repository = new EloquentImages(new Images);
            //if (! Config::get('app.cache')) {
                return $repository;
            //}
            //$laravelCache = new LaravelCache($app['cache'], ['Module', 'galleries'], 10);

            //return new CacheDecorator($repository, $laravelCache);
        });

        $app->bind('Phpv8\Modules\Images\Services\Form\ImagesForm', function (Application $app) {
            return new ImagesForm(
                new ImagesFormLaravelValidator($app['validator']),
                $app->make('Phpv8\Modules\Images\Repositories\ImagesInterface')
            );
        });
        $app->before(function ($request, $response) {
            require __DIR__ . '/../breadcrumbs.php';
        });
    }

}
