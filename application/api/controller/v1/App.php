<?php

namespace app\api\controller\v1;
use app\api\validate\ThirdAppCreste;
use app\api\controller\BaseController;
use app\api\model\ThirdApp as ThirdAppModel;

class App extends BaseController
{
    public function createThirdApp()
    {
        (new ThirdAppCreste())->goCheck();
//        $ThirdApp = new ThirdAppModel;
//        $ThirdApp->app_id = input('post.app_id');
//        $ThirdApp->app_secret = input('post.app_secret');
//        $ThirdApp->save();
    }
}
