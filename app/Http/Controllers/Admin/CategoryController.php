<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //分类列表页面
    public function index(Request $request)
    {
        //所有的分类信息
        //分析：本项目分类信息，不会超过500条，所以不做分页
        //$categories = Category::orderByRaw('concat(path, id)')->get();
        //$categories = Category::orderByRaw('concat(path, id)')->where('xxx', 'xxx')->get();

        $query = Category::orderByRaw('concat(path, id)');

        //添加搜索条件
        if ($request->get('name')) {
            // name line '%电脑%'
            $query->where('name', 'like', '%' . $request->get('name') . '%');
        }
        if ($request->get('status')) {
            // status = ?
            $query->where('status', '=', $request->get('status'));
        }

        //获取数据
        $categories = $query->get();

        return view('admin.category.index')->with('categories', $categories);
    }

    //新增分类
    public function create()
    {
        $category = new Category();

        //所有的分类
        $categories = Category::orderByRaw('concat(path, id)')->get();

        return view('admin.category.create')->with([
            'category' => $category,
            'categories' => $categories,
        ]);
    }

    public function doCreate(Request $request)
    {
        //todo 加验证

        $data = $request->all();

        $parentId = $request->get('parent_id');
        if ($parentId == 0) {
            $path = '0,';
        } else {
            //查用户选择的父级分类
            $parentCategory = Category::find($parentId);
            if ($parentCategory == null) {
                abort(500, '父级ID有误');
            }

            $path = $parentCategory->path . $parentId . ',';
        }

        $category = new Category();
        $category->fill($data); //批量填充

        $category->path = $path;

        if ($category->save()) {
            return redirect('admin/category');
        }

    }

    //删除分类数据
    public function delete(Request $request)
    {
        //1,2,4  或  4
        $ids = explode(',', $request->get('id')); //$_POST  $_GET

        //select * from category where id in (1,2,4)
        $categories = Category::whereIn('id', $ids)->get();

        //开启事务
        \DB::beginTransaction();

        $deleted = 0; //记录成功删除的数量
        foreach ($categories as $category) {

            //判断是否允许删除
            if (!$category->allowDelete()) {
                break;
            }

            //执行删除操作，并记录成功删除的条数
            $deleted += $category->delete();
        }

        //判断是否全部删除成功
        if ($deleted == count($categories)) {
            //提交事务
            \DB::commit();
            $message = '删除成功了' . $deleted . '条记录';
        } else {
            //回滚事务
            \DB::rollBack();
            $message = '删除失败';
        }

        return redirect()->back()->with('message', $message);//是将这个消息放入了session中 (一次消息)
    }

    //显示分类编辑界面
    public function update($id)
    {
        /*
        $category = Category::find($id);
        if($category == null){
            abort(404, '指定ID不存在:'. $id);
        }*/

        $category = Category::findOrFail($id);

        return view('admin.category.update')->with('category', $category);
    }

    public function doUpdate($id, Request $request)
    {
        //验证
        $rules=[
            'name'=>'required|min:2|max:20',
            'sort'=>'required|integer',
            'status'=>'required|integer',
        ];
        $this->validate($request,$rules);

        $category = Category::findOrFail($id);

        $category->name = $request->get('name');
        $category->sort = $request->get('sort');
        $category->status = $request->get('status');

        if($category->save()){
            return redirect('admin/category')->with('message', '修改成功');
        }else{
            return back()->withInput()->with('message', '保存失败');
        }

    }

}