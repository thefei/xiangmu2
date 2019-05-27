<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 路由组设置
//后台的登录页面
Route::get('admin/logins','Admin\LoginController@login');
Route::post('admin/dologin','Admin\LoginController@dologin');

Route::get('admin/captcha','Admin\LoginController@captcha');

//
Route::get('/admin/showper','Admin\RoleController@showper');

//七牛云实例
// Route::get('/admin/qiniu','Admin\IndexController@qiniu');
// Route::post('/admin/doqiniu','Admin\IndexController@doqiniu');



//后台

//['login','roleper']
Route::group([], function(){
	//后台的首页
	Route::get('admins','Admin\IndexController@index');

	//修改头像
	Route::get('admin/profile','Admin\LoginController@profile');
	Route::post('admin/upload','Admin\LoginController@upload');

	//修改密码
	Route::get('admin/pass','Admin\LoginController@pass');
	Route::post('admin/dopass','Admin\LoginController@dopass');

	//退出
	Route::get('admin/logout','Admin\LoginController@logout');

	//后台的管理员
	Route::resource('/admin/user','Admin\UserController');
	Route::get('/admin/userrole','Admin\UserController@user_role');
	Route::post('/admin/douserrole','Admin\UserController@do_user_role');

	//角色管理
	Route::resource('/admin/role','Admin\RoleController');
	Route::get('/admin/roleper','Admin\RoleController@role_per');
	Route::post('/admin/doroleper','Admin\RoleController@doroleper');

	//权限管理
	Route::resource('/admin/permission','Admin\PermissionController');

	//会员管理 列表
	Route::get('/admin/huiyuan','Admin\HuiyuanController@huiyuan');
	//会员修改页面
	Route::get('/admin/xiugai/{id}','Admin\HuiyuanController@xiugai');
	//处理修改信息
	Route::post('/admin/doxiugai','Admin\HuiyuanController@doxiugai');




	//分类的管理
	Route::resource('/admin/category','Admin\CategoryController');
	//商品的管理
	Route::resource('/admin/goods','Admin\GoodsController');
	

});


//前台首页
Route::get('/', 'Home\IndexController@index');
//前台的注册
Route::get('/home/zhuce','Home\LoginController@zhuce');
Route::post('/home/dozhuce','Home\LoginController@dozhuce');
// Route::get('/home/doremind','Home\RegistController@doremind');

//前台的登录
Route::get('/home/login','Home\LoginController@login');
Route::post('/home/dologin','Home\LoginController@dologin');
//第三方登录
// Route::get('/home/qq','Home\LoginController@qq');
// Route::get('/home/qqlogin','Home\LoginController@qqlogin');
//前台退出
Route::get('/home/tuichu','Home\LoginController@tuichu');
//前段轮播图
Route::resource('/home/img','Home\ImgController');
//前端的个人中心
// Route::get('/home/person','Home\LoginController@person');
Route::resource('/home/me','Home\MeController');
//前段的个人中心修改密码
Route::get('/home/scr','Home\LoginController@scr');
Route::post('/home/doscr','Home\LoginController@doscr');
//前台
Route::group([], function(){
	
	Route::get('/home/cart','Home\CartController@cartintro');
	Route::post('/home/remcart','Home\CartController@remcart');

});

