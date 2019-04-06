<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/5
 * Time: 15:00
 */

namespace app\common\model;


use think\Model;

class BaseModel extends Model {
    protected $pk = 'id';

    // 定义时间戳字段名
    protected $createTime = 'createTime';
    protected $updateTime = 'updateTime';
}