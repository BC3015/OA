<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    //周报视图路由
    $router->resource('weekly', WeeklyController::class);

    //周报添加路由
    $router->post('weekly/add', 'WeeklyController@add');

    //周报获取历史周报路由
    $router->post('weekly/get_info', 'WeeklyController@get_info');

    //周报修改路由
    $router->post('weekly/upd','WeeklyController@upd');

    //周报获取详情图路由
    $router->post('weekly/get_week','WeeklyController@get_week');

    //周报审核获取详情图路由
    $router->post('weekly_review/get_week','Weekly_reviewController@get_week');

    //判断是否提交路由
    $router->post('weekly/is_submit','WeeklyController@is_submit');

    //周报审核视图路由
    $router->resource('weekly_review', Weekly_reviewController::class);

    //周计划视图路由
    $router->resource('weekly_plan', Weekly_planController::class);

    //项目管理视图路由
    $router->resource('project', ProjectController::class);

    //任务管理视图路由
    $router->resource('task', TaskController::class);

});
