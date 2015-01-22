<?php
namespace Phpv8\Modules\Video\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

// Models
use Phpv8\Modules\Video\Models\Video;
//use Phpv8\Modules\Video\Models\ModuleTranslation;

// Repo
use Phpv8\Modules\Video\Repositories\EloquentVideo;


// Form
use Phpv8\Modules\Video\Services\Form\VideoForm;
use Phpv8\Modules\Video\Services\Form\VideoFormLaravelValidator;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        // Add dirs
        Lang::addNamespace('Video',__DIR__.'/../Lang');
        //View::addNamespace('Module', __DIR__ . '/../Views');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('Video', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->bind('Phpv8\Modules\Video\Repositories\VideoInterface', function (Application $app) {
            $repository = new EloquentVideo(new Video);
            //if (! Config::get('app.cache')) {
                return $repository;
            //}
            //$laravelCache = new LaravelCache($app['cache'], ['Module', 'galleries'], 10);

            //return new CacheDecorator($repository, $laravelCache);
        });

        $app->bind('Phpv8\Modules\Video\Services\Form\VideoForm', function (Application $app) {
            return new VideoForm(
                new VideoFormLaravelValidator($app['validator']),
                $app->make('Phpv8\Modules\Video\Repositories\VideoInterface')
            );
        });
        $app->before(function ($request, $response) {
            require __DIR__ . '/../breadcrumbs.php';
        });
    }

}
