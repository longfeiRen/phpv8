<?php
namespace Phpv8\Providers;

use Illuminate\Support\ServiceProvider;
use Phpv8\Services\Phpv8;

class StartProvider extends ServiceProvider
{
    public function boot()
    {
        
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register('Phpv8\Modules\Users\Providers\DrivesProvider');//用户管理
        $this->app->register('Phpv8\Modules\Dashboard\Providers\DrivesProvider');
        $this->app->register('Phpv8\Modules\Setting\Providers\DrivesProvider');//系统设置
        $this->app->register('Phpv8\Modules\Article\Providers\DrivesProvider');//文章
        $this->app->register('Phpv8\Modules\Classify\Providers\DrivesProvider');//分类
        $this->app->register('Phpv8\Modules\Uploads\Providers\DrivesProvider');//上传
        $this->app->register('Phpv8\Modules\Groups\Providers\DrivesProvider');//上传
        $this->app->register('Phpv8\Modules\Permission\Providers\DrivesProvider');//上传
        $this->app->register('Phpv8\Modules\Reply\Providers\DrivesProvider');//上传
        $this->app->register('Phpv8\Modules\Images\Providers\DrivesProvider');//上传
        $this->app->register('Phpv8\Modules\Video\Providers\DrivesProvider');//上传
        $this->app->register('Phpv8\Modules\Integral\Providers\DrivesProvider');//上传
        $this->app->register('Phpv8\Modules\Follow\Providers\DrivesProvider');//上传
        $this->app->register('Phpv8\Modules\Shop\Providers\DrivesProvider');//上传
        $this->app->register('Phpv8\Modules\Letter\Providers\DrivesProvider');//上传
    }
}
