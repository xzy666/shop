@extends('admin.layouts.master')

<?php $leftMenuActive = 'admin/category' ?>

@section('content-wrapper')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            修改分类
            <small>编辑分类信息</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="{{ url('admin/category') }}">分类管理</a></li>
            <li class="active">修改分类</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        @include('admin.common._message')

        <div class="box box-primary">

            <!-- form start -->
            <form role="form" action="" method="post">

                {{ csrf_field() }}

                <div class="box-body">

                    <div class="form-group">
                        <label for="inputParent">父级</label>
                        <span>{{ $category->getParentName() }}</span>
                        <p class="help-block"></p>
                    </div>


                    <div class="form-group {{ $errors->has('name')? 'has-error' :'' }}">
                        <label for="inputName">名称</label>
                        <input type="text" value="{{ old('name', $category->name) }}" name="name" class="form-control" id="inputName">
                        <p class="help-block">请输入分类名称</p>
                    </div>

                    <div class="form-group {{ $errors->has('sort')? 'has-error' :'' }}">
                        <label for="inputSort">排序</label>
                        <input type="text" value="{{ old('sort', $category->sort) }}" name="sort" class="form-control" id="inputSort">
                        <p class="help-block">请输入整数，越小越靠前</p>
                    </div>

                    <div class="form-group">
                        <lable>状态</lable>
                        <div>
                            @foreach($category->statusAlias(true) as $key => $val)
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="status" value="{{ $key }}" @if( old('status', $category->status) == $key) checked @endif>
                                        {{ $val }}
                                    </label>
                                </div>
                            @endforeach
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