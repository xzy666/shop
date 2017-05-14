@extends('layouts.main')

@section('content')


    <div id="top-banner-and-menu">
        <div class="container">

            <div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown">
                    <div class="head"><i class="fa fa-list"></i> 商品分类</div>
                    <nav class="yamm megamenu-horizontal" role="navigation">
                        <ul class="nav">
                            @foreach($categories[0] as $categoryTop)
                                <li class="dropdown menu-item">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $categoryTop->name }}</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li class="yamm-content">
                                            <div class="row">

                                                @if(isset($categories[$categoryTop->id]))
                                                    @foreach($categories[$categoryTop->id] as $categorySecond)
                                                        <div class="col-md-4">
                                                            <ul class="list-unstyled">

                                                                {{-- 2级分类 --}}
                                                                <li><a href="{{ url('product', $categorySecond->id) }}"><b>{{ $categorySecond->name }}</b></a></li>


                                                                {{-- 3级分类 --}}
                                                                @if(isset($categories[$categorySecond->id]))
                                                                    @foreach($categories[$categorySecond->id] as $categoryThird)
                                                                        <li><a href="{{ url('product', $categoryThird->id) }}">{{ $categoryThird->name }}</a></li>
                                                                    @endforeach
                                                                @endif

                                                            </ul>
                                                        </div>
                                                    @endforeach
                                                @endif

                                            </div>
                                        </li>
                                    </ul>
                                </li><!-- /.menu-item -->
                            @endforeach
                        </ul><!-- /.nav -->
                    </nav><!-- /.megamenu-horizontal -->
                </div><!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->
            </div><!-- /.sidemenu-holder -->

            <div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->

                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                        <div class="item" style="background-image: url({{ asset('static/frontend') }}/assets/images/sliders/111.jpg);">
                        </div><!-- /.item -->

                        <div class="item" style="background-image: url({{ asset('static/frontend') }}/assets/images/sliders/222.jpg);">
                        </div><!-- /.item -->

                    </div><!-- /.owl-carousel -->
                </div>

                <!-- ========================================= SECTION – HERO : END ========================================= -->
            </div><!-- /.homebanner-holder -->

        </div><!-- /.container -->
    </div><!-- /#top-banner-and-menu -->

    <!-- ========================================= HOME BANNERS ========================================= -->
    <section id="banner-holder" class="wow fadeInUp">
        <div class="container">
            <div class="col-xs-12 col-lg-6 no-margin banner">
                <a href="category-grid-2.html">
                    <div class="banner-text theblue">
                        <h1>新品上线</h1>
                        <span class="tagline">新品上线新品上线新品上线</span>
                    </div>
                    <img class="banner-image" alt="" src="{{ asset('static/frontend') }}/assets/images/blank.gif"
                         data-echo="assets/images/banners/banner-narrow-01.jpg"/>
                </a>
            </div>
            <div class="col-xs-12 col-lg-6 no-margin text-right banner">
                <a href="category-grid-2.html">
                    <div class="banner-text right">
                        <h1>热销商品</h1>
                        <span class="tagline">热销商品热销商品热销商品</span>
                    </div>
                    <img class="banner-image" alt="" src="{{ asset('static/frontend') }}/assets/images/blank.gif"
                         data-echo="assets/images/banners/banner-narrow-02.jpg"/>
                </a>
            </div>
        </div><!-- /.container -->
    </section><!-- /#banner-holder -->
    <!-- ========================================= HOME BANNERS : END ========================================= -->

    <div id="products-tab" class="wow fadeInUp">
        <div class="container">
            <div class="tab-holder">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#featured" data-toggle="tab">家电馆</a></li>
                    <li><a href="#new-arrivals" data-toggle="tab">生活馆</a></li>
                    <li><a href="#top-sales" data-toggle="tab">电脑数码</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="featured">
                        <div class="product-grid-holder">
                            <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                                <div class="product-item">
                                    <div class="ribbon red"><span>折扣</span></div>
                                    <div class="image">
                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount green">狂降50%</div>
                                        <div class="title">
                                            <a href="single-product.html">什么什么笔记本</a>
                                        </div>
                                        <div class="brand">品牌品牌</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">￥1399.00</div>
                                        <div class="price-current pull-right">￥1199.00</div>
                                    </div>

                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">添加到购物车</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                <div class="product-item">
                                    <div class="ribbon blue"><span>new!</span></div>
                                    <div class="image">
                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount clear"></div>
                                        <div class="title">
                                            <a href="single-product.html">商品名111</a>
                                        </div>
                                        <div class="brand">品牌A</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">￥1399.00</div>
                                        <div class="price-current pull-right">￥1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">添加到购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                <div class="product-item">

                                    <div class="image">
                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount clear"></div>
                                        <div class="title">
                                            <a href="single-product.html">商品名称111</a>
                                        </div>
                                        <div class="brand">品牌b</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">￥1399.00</div>
                                        <div class="price-current pull-right">￥1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">添加到购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                <div class="product-item">
                                    <div class="ribbon red"><span>优惠</span></div>
                                    <div class="ribbon green"><span>畅销商品</span></div>
                                    <div class="image">
                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount clear"></div>
                                        <div class="title">
                                            <a href="single-product.html">商品名称abcdef</a>
                                        </div>
                                        <div class="brand">品牌</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">￥1399.00</div>
                                        <div class="price-current pull-right">￥1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">添加到购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="loadmore-holder text-center">
                            <a class="btn-loadmore" href="#">
                                <i class="fa fa-plus"></i>
                                更多商品</a>
                        </div>
                    </div>
                    <div class="tab-pane" id="new-arrivals">
                        <div class="product-grid-holder">
                            <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                                <div class="product-item">
                                    <div class="ribbon red"><span>折扣</span></div>
                                    <div class="image">
                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount green">狂降50%</div>
                                        <div class="title">
                                            <a href="single-product.html">什么什么笔记本</a>
                                        </div>
                                        <div class="brand">品牌品牌</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">￥1399.00</div>
                                        <div class="price-current pull-right">￥1199.00</div>
                                    </div>

                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">添加到购物车</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                <div class="product-item">
                                    <div class="ribbon blue"><span>new!</span></div>
                                    <div class="image">
                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount clear"></div>
                                        <div class="title">
                                            <a href="single-product.html">商品名111</a>
                                        </div>
                                        <div class="brand">品牌A</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">￥1399.00</div>
                                        <div class="price-current pull-right">￥1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">添加到购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                <div class="product-item">

                                    <div class="image">
                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount clear"></div>
                                        <div class="title">
                                            <a href="single-product.html">商品名称111</a>
                                        </div>
                                        <div class="brand">品牌b</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">￥1399.00</div>
                                        <div class="price-current pull-right">￥1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">添加到购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                <div class="product-item">
                                    <div class="ribbon red"><span>优惠</span></div>
                                    <div class="ribbon green"><span>畅销商品</span></div>
                                    <div class="image">
                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount clear"></div>
                                        <div class="title">
                                            <a href="single-product.html">商品名称abcdef</a>
                                        </div>
                                        <div class="brand">品牌</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">￥1399.00</div>
                                        <div class="price-current pull-right">￥1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">添加到购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="loadmore-holder text-center">
                            <a class="btn-loadmore" href="#">
                                <i class="fa fa-plus"></i>
                                更多商品</a>
                        </div>
                    </div>
                    <div class="tab-pane" id="top-sales">
                        <div class="product-grid-holder">
                            <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                                <div class="product-item">
                                    <div class="ribbon red"><span>折扣</span></div>
                                    <div class="image">
                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount green">狂降50%</div>
                                        <div class="title">
                                            <a href="single-product.html">什么什么笔记本</a>
                                        </div>
                                        <div class="brand">品牌品牌</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">￥1399.00</div>
                                        <div class="price-current pull-right">￥1199.00</div>
                                    </div>

                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">添加到购物车</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                <div class="product-item">
                                    <div class="ribbon blue"><span>new!</span></div>
                                    <div class="image">
                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount clear"></div>
                                        <div class="title">
                                            <a href="single-product.html">商品名111</a>
                                        </div>
                                        <div class="brand">品牌A</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">￥1399.00</div>
                                        <div class="price-current pull-right">￥1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">添加到购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                <div class="product-item">

                                    <div class="image">
                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount clear"></div>
                                        <div class="title">
                                            <a href="single-product.html">商品名称111</a>
                                        </div>
                                        <div class="brand">品牌b</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">￥1399.00</div>
                                        <div class="price-current pull-right">￥1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">添加到购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                <div class="product-item">
                                    <div class="ribbon red"><span>优惠</span></div>
                                    <div class="ribbon green"><span>畅销商品</span></div>
                                    <div class="image">
                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg"/>
                                    </div>
                                    <div class="body">
                                        <div class="label-discount clear"></div>
                                        <div class="title">
                                            <a href="single-product.html">商品名称abcdef</a>
                                        </div>
                                        <div class="brand">品牌</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-prev">￥1399.00</div>
                                        <div class="price-current pull-right">￥1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">添加到购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="loadmore-holder text-center">
                            <a class="btn-loadmore" href="#">
                                <i class="fa fa-plus"></i>
                                更多商品</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ========================================= TOP BRANDS ========================================= -->
    <section id="top-brands" class="wow fadeInUp">
        <div class="container">
            <div class="carousel-holder">

                <div class="title-nav">
                    <h1>品牌排行榜</h1>
                    <div class="nav-holder">
                        <a href="#prev" data-target="#owl-brands" class="slider-prev btn-prev fa fa-angle-left"></a>
                        <a href="#next" data-target="#owl-brands" class="slider-next btn-next fa fa-angle-right"></a>
                    </div>
                </div><!-- /.title-nav -->

                <div id="owl-brands" class="owl-carousel brands-carousel">

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('static/frontend') }}/assets/images/brands/brand-01.jpg"/>
                        </a>
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('static/frontend') }}/assets/images/brands/brand-02.jpg"/>
                        </a>
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('static/frontend') }}/assets/images/brands/brand-03.jpg"/>
                        </a>
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('static/frontend') }}/assets/images/brands/brand-04.jpg"/>
                        </a>
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('static/frontend') }}/assets/images/brands/brand-01.jpg"/>
                        </a>
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('static/frontend') }}/assets/images/brands/brand-02.jpg"/>
                        </a>
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('static/frontend') }}/assets/images/brands/brand-03.jpg"/>
                        </a>
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('static/frontend') }}/assets/images/brands/brand-04.jpg"/>
                        </a>
                    </div><!-- /.carousel-item -->

                </div><!-- /.brands-caresoul -->

            </div><!-- /.carousel-holder -->
        </div><!-- /.container -->
    </section><!-- /#top-brands -->
    <!-- ========================================= TOP BRANDS : END ========================================= -->

@endsection