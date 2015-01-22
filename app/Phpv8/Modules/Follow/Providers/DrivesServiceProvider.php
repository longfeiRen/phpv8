<?php
namespace Phpv8\Modules\Follow\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

// Models
use Phpv8\Modules\Follow\Models\Follow;
//use Phpv8\Modules\Follow\Models\ModuleTranslation;

// Repo
use Phpv8\Modules\Follow\Repositories\EloquentFollow;


// Form
use Phpv8\Modules\Follow\Services\Form\FollowForm;
use Phpv8\Modules\Follow\Services\Form\FollowFormLaravelValidator;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        // Add dirs
        Lang::addNamespace('Follow',__DIR__.'/../Lang');
        //View::addNamespace('Module', __DIR__ . '/../Views');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('Follow', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->bind('Phpv8\Modules\Follow\Repositories\FollowInterface', function (Application $app) {
            $repository = new EloquentFollow(new Follow);
            //if (! Config::get('app.cache')) {
                return $repository;
            //}
            //$laravelCache = new LaravelCache($app['cache'], ['Module', 'galleries'], 10);

            //return new CacheDecorator($repository, $laravelCache);
        });

        $app->bind('Phpv8\Modules\Follow\Services\Form\FollowForm', function (Application $app) {
            return new FollowForm(
                new FollowFormLaravelValidator($app['validator']),
                $app->make('Phpv8\Modules\Follow\Repositories\FollowInterface')
            );
        });
        $app->before(function ($request, $response) {
            require __DIR__ . '/../breadcrumbs.php';
        });
    }

}
