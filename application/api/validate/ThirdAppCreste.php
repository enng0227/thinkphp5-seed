<?php
namespace app\api\validate;

class ThirdAppCreste extends BaseValidate
{
    protected $rule = [
        'app_id' => 'require|isNotEmpty',
        'app_secret' => 'require|isNotEmpty'
    ];
}
