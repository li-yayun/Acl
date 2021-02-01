<?php

namespace Lyy\AclService;

use Illuminate\Support\ServiceProvider;

class AclServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('AclService', function ($app) {
            return new AclService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/Acl.php' => config_path('AclDatabase.php'), // 发布配置文件到 laravel 的config 下
        ]);
    }

    /**
     * Get the services provided by the provider.
     * @return array
     */
    public function provides(){
        // 因为延迟加载 所以要定义 provides 函数 具体参考laravel 文档
        return ['Acl'];

    }
}
