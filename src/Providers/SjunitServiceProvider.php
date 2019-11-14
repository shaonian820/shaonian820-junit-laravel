<?php

namespace Shaonian820\ShaonianJunitLaravel\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * 这是单元测试组件的服务提供者
 * 用来加载Sjunit组件
 *
 * 关于组件 传统方式的引用就是 composer require xx的组件包
 * 然后只要网络没问题 就可以从github上下载下来
 *
 * 本地引用则通过修改composer.json文件 可以通过命令
 * composer config repositories.shaonian820 path ../Junit-laravel
 *
 *
 */
class SjunitServiceProvider extends ServiceProvider
{
    public function register()
    {
        //注册组件路由
        $this->registerRoute();
        //注册组件视图
        //path 视图文件路径
        //namespace 指定组件视图名称 自定义组件的资源目录地址
        $this->loadViewsFrom(__DIR__.'/../../resources/views','sjunit');
    }

    public function boot()
    {

    }

    /**
     * 注册路由服务
     */
    public function registerRoute()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . './../Http/routes.php');
        });
    }

    /**
     * @return array 注册url配置
     */
    public function routeConfiguration()
    {
        return [
            //定义访问路由域名
            //  'domain' => config('telescope.domain'),
            //定义访问控制器命名空间
            'namespace' => 'Shaonian820\ShaonianJunitLaravel\Http\Controllers',
            //定义路由前缀
             'prefix' => 'sjunit',
            //定义路由中间件
            'middleware' => 'web',
        ];
    }
}