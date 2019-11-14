#shaonian-junit-laravel

#对于框架的要求:
    laravel >= 5.8 & php >= 7.2

#安装方法
    composer require "shaonian820/shaonian-junit-laravel"


# 路由解释:
    //访问此组件首页
    注:需要前缀sjunit
    Route::get("/index","SjunitController@index");
    //调用测试 post 提交
    Route::post("/","SjunitController@store")->name('junit.store');
    //测试控制器url
    Route::get("/test","TestController@index");