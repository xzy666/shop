<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\StoreProductPost;
use App\Product;
use App\ProductDescription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //加搜索条件
        $condition = [];
        if ($request->get('name')) {
            $condition[] = ['name', 'like', '%' . $request->get('name') . '%'];
        }
        if ($request->get('status')) {
            $condition[] = ['status', '=', $request->get('status')];
        }

        $products = Product::orderBy('id', 'desc')->where($condition)->paginate();

        //加入分页条件参数
        $products->appends($request->all()); //$request->all()  ['name'=>'a', 'status'=>'1']

        return view('admin.product.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //所有的可用分类
        $categories = Category::orderByRaw('concat(path, id)')
            ->where('status', Category::STATUS_YES)
            ->get();

        $product = new Product();

        return view('admin.product.create')->with([
            'categories' => $categories,
            'product' => $product,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductPost $request)
    {
        //数据验证

        /*$rules = [
            'name' => 'required|min:2|max:50',
            'category_id' => 'required|integer',
            'sort' => 'required|integer',
            'status' => 'required|integer',
            'price' => 'required|numeric',
        ];

        $this->validate($request, $rules);*/


        $product = new Product();
        $product->name = $request->get('name');
        $product->category_id = $request->get('category_id');
        $product->sort = $request->get('sort');
        $product->price = $request->get('price');
        $product->status = $request->get('status');

        $product->save();

        /*
        $description = new ProductDescription();
        $description->product_id = $product->id;
        $description->content =  $request->get('content');
        $description->save();
        */

        $description = new ProductDescription();
        $description->content = $request->get('content', '');

        $product->description()->save($description);

        return redirect('admin/product')->with('message', '添加商品成功');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->delete()) {

            ProductDescription::where('product_id', $id)->delete();

            return redirect('admin/product')->with('message', '删除成功');
        }
    }
}
