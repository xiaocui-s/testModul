<?php

namespace Xiaocui\TestModul;

use Illuminate\Support\ServiceProvider;

class GithubServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //路由文件
        $this->loadRoutesFrom(__DIR__ . '/../../Admin/routes/common.php');

        //数据库迁移
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        //视图
        $this->loadViewsFrom(__DIR__ . '/../../Admin/resources/views', 'testModul');
        $this->publishes([
            __DIR__.'/../../Admin/resources/views' => resource_path('views/xiaocui/testModul'),
        ],'xiaocui.views');

        //config
        $this->publishes([
            __DIR__.'/../../config/xiaocui.php' => config_path('xiaocui.php'),
        ],'xiaocui.config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
