<?php

namespace app\api\model;

use think\Model;

class ThirdApp extends BaseModel
{
    // 定义时间戳字段名
    protected $createTime = 'update_time';
    public static function check($ac, $se)
    {
        $app = self::where('app_id','=',$ac)
            ->where('app_secret', '=',$se)
            ->find();
        return $app;
    }
}
