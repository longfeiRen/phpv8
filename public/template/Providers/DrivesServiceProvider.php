<?php
namespace Phpv8\Modules\{Module}\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

// Models
use Phpv8\Modules\{Module}\Models\{Module};
//use Phpv8\Modules\{Module}\Models\ModuleTranslation;

// Repo
use Phpv8\Modules\{Module}\Repositories\Eloquent{Module};


// Form
use Phpv8\Modules\{Module}\Services\Form\{Module}Form;
use Phpv8\Modules\{Module}\Services\Form\{Module}FormLaravelValidator;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        // Add dirs
        Lang::addNamespace('{Module}',__DIR__.'/../Lang');
        //View::addNamespace('Module', __DIR__ . '/../Views');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('{Module}', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->bind('Phpv8\Modules\{Module}\Repositories\{Module}Interface', function (Application $app) {
            $repository = new Eloquent{Module}(new {Module});
            //if (! Config::get('app.cache')) {
                return $repository;
            //}
            //$laravelCache = new LaravelCache($app['cache'], ['Module', 'galleries'], 10);

            //return new CacheDecorator($repository, $laravelCache);
        });

        $app->bind('Phpv8\Modules\{Module}\Services\Form\{Module}Form', function (Application $app) {
            return new {Module}Form(
                new {Module}FormLaravelValidator($app['validator']),
                $app->make('Phpv8\Modules\{Module}\Repositories\{Module}Interface')
            );
        });
    }

}
