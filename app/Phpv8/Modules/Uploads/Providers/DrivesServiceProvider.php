<?php
namespace Phpv8\Modules\Uploads\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

// Models
use Phpv8\Modules\Uploads\Models\Uploads;
//use Phpv8\Modules\Uploads\Models\ModuleTranslation;

// Repo
use Phpv8\Modules\Uploads\Repositories\EloquentUploads;


// Form
use Phpv8\Modules\Uploads\Services\Form\UploadsForm;
use Phpv8\Modules\Uploads\Services\Form\UploadsFormLaravelValidator;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        // Add dirs
        Lang::addNamespace('Uploads',__DIR__.'/../Lang');
        //View::addNamespace('Module', __DIR__ . '/../Views');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('Uploads', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->bind('Phpv8\Modules\Uploads\Repositories\UploadsInterface', function (Application $app) {
            $repository = new EloquentUploads(new Uploads);
            //if (! Config::get('app.cache')) {
                return $repository;
            //}
            //$laravelCache = new LaravelCache($app['cache'], ['Module', 'galleries'], 10);

            //return new CacheDecorator($repository, $laravelCache);
        });

        $app->bind('Phpv8\Modules\Uploads\Services\Form\UploadsForm', function (Application $app) {
            return new UploadsForm(
                new UploadsFormLaravelValidator($app['validator']),
                $app->make('Phpv8\Modules\Uploads\Repositories\UploadsInterface')
            );
        });
        $app->before(function ($request, $response) {
            require __DIR__ . '/../breadcrumbs.php';
        });
    }

}
