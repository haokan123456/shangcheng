<?php
namespace app\admin\validate;

use think\Validate;

class Tplinks extends Validate
{
    protected $rule = [
        'title' => 'require',
        'link_url' => 'require|url',
    ];

    protected $message = [
        'title.require' => '链接名称不能为空',
        'link_url.require' => '链接URL不能为空',
        'link_url.url' => 'URL格式不正确',
    ];
}
