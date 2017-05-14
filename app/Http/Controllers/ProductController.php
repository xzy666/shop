<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * 商品列表页面
     */
    public function index($categoryId)
    {
        //当前传递分类id对应的数据
        $category = Category::find($categoryId);

        $path = $category->path . $category->id . ',';

        //查询所有的子分类，包括下级，下下级。。。
        $categoryIds = Category::where('path', 'like', $path . '%')
            ->where('status', Category::STATUS_YES)
            ->pluck('id')
            ->toArray();

        array_push($categoryIds, $category->id);

        //from product where category_id in (1,2,4,5)

        $products = Product::whereIn('category_id', $categoryIds)
            ->where('status', Product::STATUS_YES)
            ->paginate();

        return view('product.index')->with([
            'products' => $products,
            'category' => $category,

        ]);
    }

    /**
     * 商品详情页
     */
    public function detail($productId)
    {
        $product = Product::findOrFail($productId);

        return view('product.detail')->with([
            'product' => $product,
        ]);
    }
}
