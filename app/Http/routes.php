<?php
//$app['router']->get('/',function(){
//
//return '<h1>路由成功</h1>';
//});


//演示添加控制器模块

/*
 * 这里我的根目录 配置到public 了
路由为  $app['router']->get('w','App\Http\Controllers\WelcomeController@index');
遇到的问题是 当我在浏览器直接访问： http://lra:81/w
这时会报错，Not Found The requested URL /w was not found on this server.

而当我访问  http://lra:81/
路由为  $app['router']->get('/','App\Http\Controllers\WelcomeController@index');
就成功了

主要是因为当访问  / 时，在apache和nginx  中会帮你默认找到index.php进行访问，
而当你访问 /w  时却不能访问，是因为不能找到index.php,改成访问
 http://lra:81/index.php/w  就可以了
*/


//$app['router']->get('w','App\Http\Controllers\WelcomeController@index');

