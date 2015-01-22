<?php
namespace Phpv8\Modules\Permission\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

// Models
use Phpv8\Modules\Permission\Models\Permission;
//use Phpv8\Modules\Permission\Models\ModuleTranslation;

// Repo
use Phpv8\Modules\Permission\Repositories\EloquentPermission;


// Form
use Phpv8\Modules\Permission\Services\Form\PermissionForm;
use Phpv8\Modules\Permission\Services\Form\PermissionFormLaravelValidator;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        // Add dirs
        Lang::addNamespace('Permission',__DIR__.'/../Lang');
        //View::addNamespace('Module', __DIR__ . '/../Views');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('Permission', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->bind('Phpv8\Modules\Permission\Repositories\PermissionInterface', function (Application $app) {
            $repository = new EloquentPermission(new Permission);
            //if (! Config::get('app.cache')) {
                return $repository;
            //}
            //$laravelCache = new LaravelCache($app['cache'], ['Module', 'galleries'], 10);

            //return new CacheDecorator($repository, $laravelCache);
        });

        $app->bind('Phpv8\Modules\Permission\Services\Form\PermissionForm', function (Application $app) {
            return new PermissionForm(
                new PermissionFormLaravelValidator($app['validator']),
                $app->make('Phpv8\Modules\Permission\Repositories\PermissionInterface')
            );
        });
        $app->before(function ($request, $response) {
            require __DIR__ . '/../breadcrumbs.php';
        });
    }

}
