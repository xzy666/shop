<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    //状态
    const STATUS_YES = 1;  //启用
    const STATUS_NO = 2;   //禁用

    protected $fillable = ['name', 'sort', 'status', 'parent_id'];

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

    /**
     * 返回完整名称 例如 电脑>电脑整机>笔记本
     * @return string
     */
    public function getFullName()
    {

        //如果是顶级，则直接返回名称
        if ($this->parent_id == 0) {
            return $this->name;
        }

        //$this->path  0,1,2,

        $path = substr($this->path, 2); //1,2,
        $path = rtrim($path, ',');      //1,2
        $ids = explode(',', $path);     //[1, 2]

        //select * from category where id in (1,2)

        // ['电脑', '电脑整机']
        $names = self::whereIn('id', $ids)->orderBy('path')->pluck('name')->toArray();

        // 电脑>电脑整机>笔记本
        return join('>', $names) . '>' . $this->name;
    }

    /**
     * 是否允许被删除
     * @return bool
     */
    public function allowDelete()
    {
        //1.有子分类不能删除
        //select count(*) from category where parent_id = ?
        $count = self::where('parent_id', $this->id)->count();
        if ($count > 0) {
            return false;
        }

        //2.有商品关联，不能删除
        //select count(*) from product where category_id = ?
        $count = Product::where('category_id', $this->id)->count();
        if ($count > 0) {
            return false;
        }

        return true;
    }

    /**
     * 返回当前分类的父级名称
     * @return string
     */
    public function getParentName()
    {
        if($this->parent_id == 0){
            return '[顶级]';
        }

        $parent = self::find($this->parent_id);

        return $parent->name;
    }
}
