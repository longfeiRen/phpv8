<?php
namespace Phpv8\Modules\Users\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

// Models
use Phpv8\Modules\Users\Models\User;
//use Phpv8\Modules\Users\Models\UsersTranslation;

// Repo
use Phpv8\Modules\Users\Repositories\EloquentUsers;


// Form
use Phpv8\Modules\Users\Services\Form\UsersForm;
use Phpv8\Modules\Users\Services\Form\UsersFormLaravelValidator;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        // Add dirs
        Lang::addNamespace('Users',__DIR__.'/../Lang');
        //View::addNamespace('users', __DIR__ . '/../Views');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('Users', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->bind('Phpv8\Modules\Users\Repositories\UsersInterface', function (Application $app) {
            $repository = new EloquentUsers(new User);
            //if (! Config::get('app.cache')) {
                return $repository;
            //}
            //$laravelCache = new LaravelCache($app['cache'], ['users', 'galleries'], 10);

            //return new CacheDecorator($repository, $laravelCache);
        });

        $app->bind('Phpv8\Modules\Users\Services\Form\UsersForm', function (Application $app) {
            return new UsersForm(
                new UsersFormLaravelValidator($app['validator']),
                $app->make('Phpv8\Modules\Users\Repositories\UsersInterface')
            );
        });
        $app->before(function ($request, $response) {
            require __DIR__ . '/../breadcrumbs.php';
        });
    }

}
