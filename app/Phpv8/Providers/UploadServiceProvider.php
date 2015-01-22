<?php
namespace Phpv8\Providers;

use Illuminate\Support\ServiceProvider;
use Phpv8\Services\Uploads\Uploads;

class UploadServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['upload'] = $this->app->share(function($app)
        {
            return new Uploads;
        });
	}

}
