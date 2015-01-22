<?php
namespace Phpv8\Modules\Article\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

// Models
use Phpv8\Modules\Article\Models\Article;

// Repo
use Phpv8\Modules\Article\Repositories\EloquentArticle;


// Form
use Phpv8\Modules\Article\Services\Form\ArticleForm;
use Phpv8\Modules\Article\Services\Form\ArticleFormLaravelValidator;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        // Add dirs
        Lang::addNamespace('Article',__DIR__.'/../Lang');
        //View::addNamespace('Module', __DIR__ . '/../Views');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('Article', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->bind('Phpv8\Modules\Article\Repositories\ArticleInterface', function (Application $app) {
            $repository = new EloquentArticle(new Article);
            //if (! Config::get('app.cache')) {
                return $repository;
            //}
            //$laravelCache = new LaravelCache($app['cache'], ['Module', 'galleries'], 10);

            //return new CacheDecorator($repository, $laravelCache);
        });

        $app->bind('Phpv8\Modules\Article\Services\Form\ArticleForm', function (Application $app) {
            return new ArticleForm(
                new ArticleFormLaravelValidator($app['validator']),
                $app->make('Phpv8\Modules\Article\Repositories\ArticleInterface')
            );
        });
        $app->before(function ($request, $response) {
            require __DIR__ . '/../breadcrumbs.php';
        });
    }

}
