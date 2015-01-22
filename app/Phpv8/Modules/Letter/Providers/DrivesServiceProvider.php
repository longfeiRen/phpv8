<?php
namespace Phpv8\Modules\Letter\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

// Models
use Phpv8\Modules\Letter\Models\Letter;
//use Phpv8\Modules\Letter\Models\ModuleTranslation;

// Repo
use Phpv8\Modules\Letter\Repositories\EloquentLetter;


// Form
use Phpv8\Modules\Letter\Services\Form\LetterForm;
use Phpv8\Modules\Letter\Services\Form\LetterFormLaravelValidator;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        // Add dirs
        Lang::addNamespace('Letter',__DIR__.'/../Lang');
        //View::addNamespace('Module', __DIR__ . '/../Views');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('Letter', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->bind('Phpv8\Modules\Letter\Repositories\LetterInterface', function (Application $app) {
            $repository = new EloquentLetter(new Letter);
            //if (! Config::get('app.cache')) {
                return $repository;
            //}
            //$laravelCache = new LaravelCache($app['cache'], ['Module', 'galleries'], 10);

            //return new CacheDecorator($repository, $laravelCache);
        });

        $app->bind('Phpv8\Modules\Letter\Services\Form\LetterForm', function (Application $app) {
            return new LetterForm(
                new LetterFormLaravelValidator($app['validator']),
                $app->make('Phpv8\Modules\Letter\Repositories\LetterInterface')
            );
        });
        $app->before(function ($request, $response) {
            require __DIR__ . '/../breadcrumbs.php';
        });
    }

}
