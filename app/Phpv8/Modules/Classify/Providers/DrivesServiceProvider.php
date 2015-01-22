<?php
namespace Phpv8\Modules\Classify\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

// Models
use Phpv8\Modules\Classify\Models\Classify;
//use Phpv8\Modules\Classify\Models\ModuleTranslation;

// Repo
use Phpv8\Modules\Classify\Repositories\EloquentClassify;


// Form
use Phpv8\Modules\Classify\Services\Form\ClassifyForm;
use Phpv8\Modules\Classify\Services\Form\ClassifyFormLaravelValidator;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        // Add dirs
        Lang::addNamespace('Classify',__DIR__.'/../Lang');
        //View::addNamespace('Module', __DIR__ . '/../Views');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('Classify', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->bind('Phpv8\Modules\Classify\Repositories\ClassifyInterface', function (Application $app) {
            $repository = new EloquentClassify(new Classify);
            //if (! Config::get('app.cache')) {
                return $repository;
            //}
            //$laravelCache = new LaravelCache($app['cache'], ['Module', 'galleries'], 10);

            //return new CacheDecorator($repository, $laravelCache);
        });

        $app->bind('Phpv8\Modules\Classify\Services\Form\ClassifyForm', function (Application $app) {
            return new ClassifyForm(
                new ClassifyFormLaravelValidator($app['validator']),
                $app->make('Phpv8\Modules\Classify\Repositories\ClassifyInterface')
            );
        });
        $app->before(function ($request, $response) {
            require __DIR__ . '/../breadcrumbs.php';
        });
    }

}
