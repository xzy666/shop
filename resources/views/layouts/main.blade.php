<!DOCTYPE html>
<html>
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','商城')</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('static/frontend') }}/assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('static/frontend') }}/assets/css/main.css">
    <link rel="stylesheet" href="{{ asset('static/frontend') }}/assets/css/green.css">
    <link rel="stylesheet" href="{{ asset('static/frontend') }}/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('static/frontend') }}/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="{{ asset('static/frontend') }}/assets/css/animate.min.css">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('static/frontend') }}/assets/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('static/frontend') }}/assets/images/favicon.ico">

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="{{ asset('static/frontend') }}/assets/js/html5shiv.js"></script>
    <script src="{{ asset('static/frontend') }}/assets/js/respond.min.js"></script>
    <![endif]-->

    @yield('css')

</head>
<body>

<div class="wrapper">


    @section('top-bar')
        <!-- ============================================================= TOP NAVIGATION ============================================================= -->
        <nav class="top-bar animate-dropdown">
            <div class="container">
                <div class="col-xs-12 col-sm-6 no-margin">
                    <ul>
                        <li><a href="{{ url('/') }}">首页</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="">送至: 上海</a>

                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a role="menuitem" class="changecolor green-text" tabindex="-1"
                                                           href="#" title="Green color">上海</a></li>
                                <li role="presentation"><a role="menuitem" class="changecolor blue-text" tabindex="-1"
                                                           href="#" title="Blue color">广州</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 no-margin">
                    <ul class="right">
                        <li><a href="authentication.html">我的订单</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#change-currency">当前用户名</a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">退出</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">个人中心</a></li>
                            </ul>
                        </li>
                        <li><a href="authentication.html">注册</a></li>
                        <li><a href="authentication.html">登录</a></li>
                    </ul>
                </div><!-- /.col -->
            </div><!-- /.container -->
        </nav><!-- /.top-bar -->
        <!-- ============================================================= TOP NAVIGATION : END ============================================================= -->
    @show

    @section('header')
        <!-- ============================================================= HEADER ============================================================= -->
        <header>
            <div class="container no-padding">

                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href="index.html">
                            <img alt="logo" src="{{ asset('static/frontend') }}/assets/images/logo.png" width="233" height="54"/>
                            <!--<object id="sp" type="image/svg+xml" data="assets/images/logo.svg" width="233" height="54"></object>-->
                        </a>
                    </div><!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div><!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder no-margin">
                    <div class="contact-row">
                        <div class="phone inline">
                            <i class="fa fa-phone"></i> 客服 010-88888888
                        </div>
                    </div><!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form>
                            <div class="control-group">
                                <input class="search-field" placeholder="搜索商品"/>

                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="category-grid.html">所有分类</a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                                       href="category-grid.html">数码</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                                       href="category-grid.html">服装</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                                       href="category-grid.html">办公用品</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                                       href="category-grid.html">户外</a></li>

                                        </ul>
                                    </li>
                                </ul>

                                <a class="search-button" href="#"></a>

                            </div>
                        </form>
                    </div><!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                </div><!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin">
                    <div class="top-cart-row-container">
                        <!--<div class="wishlist-compare-holder">
                            <div class="wishlist ">
                                <a href="#"><i class="fa fa-heart"></i> wishlist <span class="value">(21)</span> </a>
                            </div>
                            <div class="compare">
                                <a href="#"><i class="fa fa-exchange"></i> compare <span class="value">(2)</span> </a>
                            </div>
                        </div>-->

                        <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                        <div class="top-cart-holder dropdown animate-dropdown">

                            <div class="basket">

                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <div class="basket-item-count">
                                        <span class="count js-cart-count">0</span>
                                        <img src="{{ asset('static/frontend') }}/assets/images/icon-cart.png" alt=""/>
                                    </div>

                                    <div class="total-price-basket">
                                        <span class="lbl">我的购物车</span>
                                        <span class="total-price">
                            <span class="sign">￥</span><span class="value js-cart-money">0.00</span>
                        </span>
                                    </div>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="basket-item">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 no-margin text-center">
                                                    <div class="thumb">
                                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product-small-01.jpg"/>
                                                    </div>
                                                </div>
                                                <div class="col-xs-8 col-sm-8 no-margin">
                                                    <div class="title">商品a</div>
                                                    <div class="price">￥270.00</div>
                                                </div>
                                            </div>
                                            <a class="close-btn" href="#"></a>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="basket-item">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 no-margin text-center">
                                                    <div class="thumb">
                                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product-small-01.jpg"/>
                                                    </div>
                                                </div>
                                                <div class="col-xs-8 col-sm-8 no-margin">
                                                    <div class="title">商品B</div>
                                                    <div class="price">￥270.00</div>
                                                </div>
                                            </div>
                                            <a class="close-btn" href="#"></a>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="basket-item">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 no-margin text-center">
                                                    <div class="thumb">
                                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product-small-01.jpg"/>
                                                    </div>
                                                </div>
                                                <div class="col-xs-8 col-sm-8 no-margin">
                                                    <div class="title">商品C</div>
                                                    <div class="price">￥270.00</div>
                                                </div>
                                            </div>
                                            <a class="close-btn" href="#"></a>
                                        </div>
                                    </li>


                                    <li class="checkout">
                                        <div class="basket-item">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6">
                                                    <a href="{{ url('cart/index') }}" class="le-button inverse">去购物车</a>
                                                </div>
                                                <div class="col-xs-12 col-sm-6">
                                                    <a href="checkout.html" class="le-button">结帐</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div><!-- /.basket -->
                        </div><!-- /.top-cart-holder -->
                    </div><!-- /.top-cart-row-container -->
                    <!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->
                </div><!-- /.top-cart-row -->

            </div><!-- /.container -->
        </header>
        <!-- ============================================================= HEADER : END ============================================================= -->
    @show

    @yield('content')


    @section('footer')
        <!-- ============================================================= FOOTER ============================================================= -->
        <footer id="footer" class="color-bg">

            <div class="sub-form-row">
                <div class="container">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
                        <form role="form">
                            <input placeholder="在这里输入您想要了解的问题">
                            <button class="le-button">立即提问</button>
                        </form>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.sub-form-row -->

            <div class="link-list-row">
                <div class="container no-padding">
                    <div class="col-xs-12 col-md-4 ">
                        <!-- ============================================================= CONTACT INFO ============================================================= -->
                        <div class="contact-info">
                            <div class="footer-logo">
                                <img src="{{ asset('static/frontend') }}/assets/images/logo.png" alt="">
                            </div><!-- /.footer-logo -->

                            <p class="regular-bold"> 宣传语宣传语宣传语宣传语</p>

                            <p>
                                宣传语宣传语宣传语宣传语宣传语宣传语宣传语宣传语
                            </p>

                            <div class="social-icons">
                                <h3>欢迎关注</h3>
                                <ul>
                                    <li><a href="#" class="fa fa-weixin"></a></li>
                                    <li><a href="#" class="fa fa-weibo"></a></li>
                                    <li><a href="#" class="fa fa-tencent-weibo"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div><!-- /.social-icons -->

                        </div>
                        <!-- ============================================================= CONTACT INFO : END ============================================================= -->
                    </div>

                    <div class="col-xs-12 col-md-8 no-margin">
                        <!-- ============================================================= LINKS FOOTER ============================================================= -->
                        <div class="link-widget">
                            <div class="widget">
                                <h3>购物指南</h3>
                                <ul>
                                    <li><a href="category-grid.html">购物流程</a></li>
                                    <li><a href="category-grid.html">会员介绍</a></li>
                                    <li><a href="category-grid.html">生活旅行</a></li>
                                    <li><a href="category-grid.html">更多内容</a></li>
                                    <li><a href="category-grid.html">更多内容</a></li>
                                    <li><a href="category-grid.html">更多内容</a></li>
                                    <li><a href="category-grid.html">更多内容</a></li>
                                    <li><a href="category-grid.html">更多内容</a></li>
                                </ul>
                            </div><!-- /.widget -->
                        </div><!-- /.link-widget -->

                        <div class="link-widget">
                            <div class="widget">
                                <h3>配送方式</h3>
                                <ul>
                                    <li><a href="category-grid.html">上门自提</a></li>
                                    <li><a href="category-grid.html">限时达</a></li>
                                    <li><a href="category-grid.html">配送服务查询</a></li>
                                    <li><a href="category-grid.html">配送费收取标准</a></li>
                                    <li><a href="category-grid.html">更多内容</a></li>

                                </ul>
                            </div><!-- /.widget -->
                        </div><!-- /.link-widget -->

                        <div class="link-widget">
                            <div class="widget">
                                <h3>支付方式</h3>
                                <ul>
                                    <li><a href="category-grid.html">货到付款</a></li>
                                    <li><a href="category-grid.html">在线支付</a></li>
                                    <li><a href="category-grid.html">分期付款</a></li>
                                    <li><a href="category-grid.html">货到付款</a></li>
                                    <li><a href="category-grid.html">公司转账</a></li>
                                </ul>
                            </div><!-- /.widget -->
                        </div><!-- /.link-widget -->
                        <!-- ============================================================= LINKS FOOTER : END ============================================================= -->
                    </div>
                </div><!-- /.container -->
            </div><!-- /.link-list-row -->

            <div class="copyright-bar">
                <div class="container">
                    <div class="col-xs-12 col-sm-6 no-margin">
                        <div class="copyright">
                            &copy; <a href="index.html">什么什么商城</a> - 版权所有
                        </div><!-- /.copyright -->
                    </div>
                    <div class="col-xs-12 col-sm-6 no-margin">
                        <div class="payment-methods ">
                            <ul>
                                <li><img alt="" src="{{ asset('static/frontend') }}/assets/images/payments/payment-visa.png"></li>
                                <li><img alt="" src="{{ asset('static/frontend') }}/assets/images/payments/payment-master.png"></li>
                                <li><img alt="" src="{{ asset('static/frontend') }}/assets/images/payments/payment-paypal.png"></li>
                                <li><img alt="" src="{{ asset('static/frontend') }}/assets/images/payments/payment-skrill.png"></li>
                            </ul>
                        </div><!-- /.payment-methods -->
                    </div>
                </div><!-- /.container -->
            </div><!-- /.copyright-bar -->

        </footer><!-- /#footer -->
        <!-- ============================================================= FOOTER : END ============================================================= -->
    @show

</div><!-- /.wrapper -->


<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="{{ asset('static/frontend/assets/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('static/frontend/assets/js/jquery-migrate-1.2.1.js') }}"></script>
<script src="{{ asset('static/frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('static/frontend/assets/js/gmap3.min.js') }}"></script>
<script src="{{ asset('static/frontend/assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
<script src="{{ asset('static/frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('static/frontend/assets/js/css_browser_selector.min.js') }}"></script>
<script src="{{ asset('static/frontend/assets/js/echo.min.js') }}"></script>
<script src="{{ asset('static/frontend/assets/js/jquery.easing-1.3.min.js') }}"></script>
<script src="{{ asset('static/frontend/assets/js/bootstrap-slider.min.js') }}"></script>
<script src="{{ asset('static/frontend/assets/js/jquery.raty.min.js') }}"></script>
<script src="{{ asset('static/frontend/assets/js/jquery.prettyPhoto.min.js') }}"></script>
<script src="{{ asset('static/frontend/assets/js/jquery.customSelect.min.js') }}"></script>
<script src="{{ asset('static/frontend/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('static/frontend/assets/js/scripts.js') }}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>

    //获取并更新购物车信息显示
    function updateCartInfo()
    {
        $.ajax({
            url: "{{ url('cart/info') }}",
            type: "GET",
            data: {},
            dataType: "json",
            success: function (res) {
                $(".js-cart-money").html(res.money);
                $(".js-cart-count").html(res.count);
            },
            error: function () {
            }
        });
    }

    $(function(){
        //获取并更新购物车信息显示
        updateCartInfo();
    });
</script>

@yield('js')

</body>
</html>