<?php
namespace Phpv8\Modules\Shop\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

// Models
use Phpv8\Modules\Shop\Models\Shop;
//use Phpv8\Modules\Shop\Models\ModuleTranslation;

// Repo
use Phpv8\Modules\Shop\Repositories\EloquentShop;


// Form
use Phpv8\Modules\Shop\Services\Form\ShopForm;
use Phpv8\Modules\Shop\Services\Form\ShopFormLaravelValidator;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        // Add dirs
        Lang::addNamespace('Shop',__DIR__.'/../Lang');
        //View::addNamespace('Module', __DIR__ . '/../Views');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('Shop', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->bind('Phpv8\Modules\Shop\Repositories\ShopInterface', function (Application $app) {
            $repository = new EloquentShop(new Shop);
            //if (! Config::get('app.cache')) {
                return $repository;
            //}
            //$laravelCache = new LaravelCache($app['cache'], ['Module', 'galleries'], 10);

            //return new CacheDecorator($repository, $laravelCache);
        });

        $app->bind('Phpv8\Modules\Shop\Services\Form\ShopForm', function (Application $app) {
            return new ShopForm(
                new ShopFormLaravelValidator($app['validator']),
                $app->make('Phpv8\Modules\Shop\Repositories\ShopInterface')
            );
        });
        $app->before(function ($request, $response) {
            require __DIR__ . '/../breadcrumbs.php';
        });
    }

}
