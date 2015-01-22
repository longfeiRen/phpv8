<?php
namespace Phpv8\Modules\Groups\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

// Models
use Phpv8\Modules\Groups\Models\Groups;
//use Phpv8\Modules\Groups\Models\ModuleTranslation;

// Repo
use Phpv8\Modules\Groups\Repositories\EloquentGroups;


// Form
use Phpv8\Modules\Groups\Services\Form\GroupsForm;
use Phpv8\Modules\Groups\Services\Form\GroupsFormLaravelValidator;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        // Add dirs
        Lang::addNamespace('Groups',__DIR__.'/../Lang');
        //View::addNamespace('Module', __DIR__ . '/../Views');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('Groups', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->bind('Phpv8\Modules\Groups\Repositories\GroupsInterface', function (Application $app) {
            $repository = new EloquentGroups(new Groups);
            //if (! Config::get('app.cache')) {
                return $repository;
            //}
            //$laravelCache = new LaravelCache($app['cache'], ['Module', 'galleries'], 10);

            //return new CacheDecorator($repository, $laravelCache);
        });

        $app->bind('Phpv8\Modules\Groups\Services\Form\GroupsForm', function (Application $app) {
            return new GroupsForm(
                new GroupsFormLaravelValidator($app['validator']),
                $app->make('Phpv8\Modules\Groups\Repositories\GroupsInterface')
            );
        });
        $app->before(function ($request, $response) {
            require __DIR__ . '/../breadcrumbs.php';
        });
    }

}
