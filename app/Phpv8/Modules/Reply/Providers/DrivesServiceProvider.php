<?php
namespace Phpv8\Modules\Reply\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

// Models
use Phpv8\Modules\Reply\Models\Reply;
//use Phpv8\Modules\Reply\Models\ModuleTranslation;

// Repo
use Phpv8\Modules\Reply\Repositories\EloquentReply;


// Form
use Phpv8\Modules\Reply\Services\Form\ReplyForm;
use Phpv8\Modules\Reply\Services\Form\ReplyFormLaravelValidator;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        // Add dirs
        Lang::addNamespace('Reply',__DIR__.'/../Lang');
        //View::addNamespace('Module', __DIR__ . '/../Views');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('Reply', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->bind('Phpv8\Modules\Reply\Repositories\ReplyInterface', function (Application $app) {
            $repository = new EloquentReply(new Reply);
            //if (! Config::get('app.cache')) {
                return $repository;
            //}
            //$laravelCache = new LaravelCache($app['cache'], ['Module', 'galleries'], 10);

            //return new CacheDecorator($repository, $laravelCache);
        });

        $app->bind('Phpv8\Modules\Reply\Services\Form\ReplyForm', function (Application $app) {
            return new ReplyForm(
                new ReplyFormLaravelValidator($app['validator']),
                $app->make('Phpv8\Modules\Reply\Repositories\ReplyInterface')
            );
        });
        $app->before(function ($request, $response) {
            require __DIR__ . '/../breadcrumbs.php';
        });
    }

}
