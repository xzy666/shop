<?php

namespace  App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    //后台首页
    public function index()
    {
        return view('admin.default.index');
    }
}