<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;
// Token
Route::post("api/:version/token/user","api/:version.Token/getToken");
Route::post("api/:version/token/app","api/:version.Token/getAppToken");
Route::post("api/:version/token/verify","api/:version.Token/verifyToken");
// address
Route::post("api/:version/address","api/:version.Address/createOrUpdateAddress");
Route::get("api/:version/address","api/:version.Address/getUserAddress");
