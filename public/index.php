<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);//排除NOTICE错误
//调用自动加载文件，添加自动加载函数    /../vendor/autoload.php  注意..前面要加 / 的
require __DIR__.'/../vendor/autoload.php';
//实例化服务容器，注册事件，路由服务提供者

$app = new \Illuminate\Container\Container();
with(new \Illuminate\Events\EventServiceProvider($app))->register();
with(new \Illuminate\Routing\RoutingServiceProvider($app))->register();

//加载路由
require __DIR__ . '/../app/Http/routes.php';

//实例化请求并分发处理请求
$request = \Illuminate\Http\Request::createFromGlobals();
$response = $app['router']->dispatch($request);

//返回请求响应
$response->send();