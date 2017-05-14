@extends('admin.layouts.master')

<?php $leftMenuActive = 'admin/product' ?>

@section('content-wrapper')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            添加商品
            <small>填写商品信息</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="{{ url('admin/category') }}">商品管理</a></li>
            <li class="active">新增商品</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        @include('admin.common._message')

        <div class="box box-primary">

            <!-- form start -->
            <form role="form" action="{{ url('admin/product') }}" method="post">

                {{ csrf_field() }}

                <div class="box-body">

                    <div class="form-group @if($errors->has('category_id')) has-error @endif">
                        <label for="inputParent">分类</label>
                        <select id="inputParent" class="form-control" name="category_id">
                            @foreach($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->getFullName() }}</option>
                            @endforeach
                        </select>
                        <p class="help-block"></p>
                    </div>


                    <div class="form-group @if($errors->has('name')) has-error @endif">
                        <label for="inputName">名称</label>
                        <input type="text" name="name" class="form-control" id="inputName">
                        <p class="help-block">请输入商品名称</p>
                    </div>

                    <div class="form-group @if($errors->has('price')) has-error @endif">
                        <label for="inputPrice">单价</label>
                        <input type="text" name="price" class="form-control" id="inputPrice">
                        <p class="help-block">请输入商品单价</p>
                    </div>

                    <div class="form-group @if($errors->has('sort')) has-error @endif">
                        <label for="inputSort">排序</label>
                        <input type="text" name="sort" class="form-control" id="inputSort">
                        <p class="help-block">请输入整数，越小越靠前</p>
                    </div>

                    <div class="form-group @if($errors->has('status')) has-error @endif">
                        <lable>状态</lable>
                        <div>
                            @foreach($product->statusAlias(true) as $key => $val)
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="status" value="{{ $key }}">
                                        {{ $val }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group @if($errors->has('content')) has-error @endif">
                        <lable>描述</lable>
                        <div>
                            <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </form>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection