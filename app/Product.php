<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    //状态
    const STATUS_YES = 1;  //启用
    const STATUS_NO = 2;   //禁用

    public function statusAlias($returnAll = false)
    {
        $map = [
            self::STATUS_YES => '启用',
            self::STATUS_NO => '禁用',
        ];

        if ($returnAll) {
            return $map;
        }

        return array_key_exists($this->status, $map) ? $map[$this->status] : '';
    }

    //一个分类下，有多个商品，叫一对多关联   => 反过来，就叫 belongsTo
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //一个商品有一条描述内容，一对一关联
    public function description()
    {
        return $this->hasOne(ProductDescription::class);
    }

}
