<?php
namespace Phpv8\Modules\Setting\Providers;

use View;
use Lang;
use Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;

// Models
use Phpv8\Modules\Setting\Models\Setting;

// Repo
use Phpv8\Modules\Setting\Repositories\EloquentSetting;


// Form
use Phpv8\Modules\Setting\Services\Form\SettingForm;
use Phpv8\Modules\Setting\Services\Form\SettingFormLaravelValidator;


class DrivesProvider extends ServiceProvider
{

    public function boot()
    {
        // Bring in the routes
        require __DIR__ . '/../routes.php';

        // Add dirs
        Lang::addNamespace('Setting',__DIR__.'/../Lang');
        //View::addNamespace('Module', __DIR__ . '/../Views');
        View::addLocation(__DIR__ . '/../Views');
        Config::addNamespace('Setting', __DIR__ . '/../Config');
    }

    public function register()
    {

        $app = $this->app;

        $app->bind('Phpv8\Modules\Setting\Repositories\SettingInterface', function (Application $app) {
            $repository = new EloquentSetting(new Setting);
            //if (! Config::get('app.cache')) {
                return $repository;
            //}
            //$laravelCache = new LaravelCache($app['cache'], ['Module', 'galleries'], 10);

            //return new CacheDecorator($repository, $laravelCache);
        });

        $app->bind('Phpv8\Modules\Setting\Services\Form\SettingForm', function (Application $app) {
            return new SettingForm(
                new SettingFormLaravelValidator($app['validator']),
                $app->make('Phpv8\Modules\Setting\Repositories\SettingInterface')
            );
        });
        $app->before(function ($request, $response) {
            require __DIR__ . '/../breadcrumbs.php';
        });
    }

}
