@extends('layouts.main')

@section('content')
    <section id="category-grid">
        <div class="container">

            <!-- ========================================= SIDEBAR ========================================= -->
            <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">


                <!-- ========================================= FEATURED PRODUCTS ========================================= -->
                <div class="widget">
                    <h1 class="border">推荐商品</h1>
                    <ul class="product-list">

                        <li class="sidebar-product-list-item">
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 no-margin">
                                    <a href="#" class="thumb-holder">
                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg">
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 no-margin">
                                    <a href="#">手机XXX </a>
                                    <div class="price">
                                        <div class="price-prev">￥2000</div>
                                        <div class="price-current">￥1873</div>
                                    </div>
                                </div>
                            </div>
                        </li><!-- /.sidebar-product-list-item -->

                        <li class="sidebar-product-list-item">
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 no-margin">
                                    <a href="#" class="thumb-holder">
                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg">
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 no-margin">
                                    <a href="#">手机XXX </a>
                                    <div class="price">
                                        <div class="price-prev">￥2000</div>
                                        <div class="price-current">￥1873</div>
                                    </div>
                                </div>
                            </div>
                        </li><!-- /.sidebar-product-list-item -->

                        <li class="sidebar-product-list-item">
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 no-margin">
                                    <a href="#" class="thumb-holder">
                                        <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg">
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 no-margin">
                                    <a href="#">手机XXX </a>
                                    <div class="price">
                                        <div class="price-prev">￥2000</div>
                                        <div class="price-current">￥1873</div>
                                    </div>
                                </div>
                            </div>
                        </li><!-- /.sidebar-product-list-item -->


                    </ul><!-- /.product-list -->
                </div><!-- /.widget -->
                <!-- ========================================= FEATURED PRODUCTS : END ========================================= -->
            </div>
            <!-- ========================================= SIDEBAR : END ========================================= -->

            <!-- ========================================= CONTENT ========================================= -->

            <div class="col-xs-12 col-sm-9 no-margin wide sidebar">


                <div id="grid-page-banner">
                    <a href="#">
                        <img src="{{ asset('static/frontend') }}/assets/images/banners/banner-gamer.jpg" alt="">
                    </a>
                </div>


                <section id="gaming">
                    <div class="grid-list-products">
                        <h2 class="section-title">{{ $category->name }}</h2>

                        <div class="tab-content">
                            <div id="grid-view" class="products-grid fade tab-pane in active">

                                <div class="product-grid-holder">
                                    <div class="row no-margin">

                                        @forelse($products as $product)
                                            <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                            <div class="product-item">
                                                <div class="ribbon red"><span>sale</span></div>
                                                <div class="image">
                                                    <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg">
                                                </div>
                                                <div class="body">
                                                    <div class="label-discount green">5折优惠</div>
                                                    <div class="title">
                                                        <a href="{{ url('product/detail', $product->id) }}">{{ $product->name }}</a>
                                                    </div>
                                                    <div class="brand">品牌</div>
                                                </div>
                                                <div class="prices">
                                                    {{--  <div class="price-prev">￥1399.00</div> --}}
                                                    <div class="price-current pull-right">￥{{ $product->price }}</div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="add-cart-button">
                                                        <a href="single-product.html" class="le-button">添加到购物车</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-item -->
                                        </div><!-- /.product-item-holder -->
                                        @empty
                                            <div>暂无商品</div>
                                        @endforelse
                                    </div><!-- /.row -->
                                </div><!-- /.product-grid-holder -->

                                <div class="pagination-holder">
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-6 text-left">
                                            {{ $products->links() }}
                                        </div>

                                        <div class="col-xs-12 col-sm-6">
                                            <div class="result-counter">
                                                当前第{{ $products->currentPage() }}页，共{{ $products->total() }}条商品信息
                                            </div>
                                        </div>

                                    </div><!-- /.row -->
                                </div><!-- /.pagination-holder -->
                            </div><!-- /.products-grid #grid-view -->

                            <div id="list-view" class="products-grid fade tab-pane ">
                                <div class="products-list">

                                    <div class="product-item product-item-holder">
                                        <div class="ribbon red"><span>sale</span></div>
                                        <div class="ribbon blue"><span>new!</span></div>
                                        <div class="row">
                                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                <div class="image">
                                                    <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product-01.jpg">
                                                </div>
                                            </div><!-- /.image-holder -->
                                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                <div class="body">
                                                    <div class="label-discount green">-50% sale</div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8
                                                            SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                    <div class="excerpt">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                                            lobortis euismod erat sit amet porta. Etiam venenatis ac
                                                            diam ac tristique. Morbi accumsan consectetur odio ut
                                                            tincidunt.</p>
                                                    </div>
                                                    <div class="addto-compare">
                                                        <a class="btn-add-to-compare" href="#">add to compare list</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.body-holder -->
                                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                <div class="right-clmn">
                                                    <div class="price-current">$1199.00</div>
                                                    <div class="price-prev">$1399.00</div>
                                                    <div class="availability"><label>availability:</label><span
                                                                class="available">  in stock</span></div>
                                                    <a class="le-button" href="#">add to cart</a>
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                </div>
                                            </div><!-- /.price-area -->
                                        </div><!-- /.row -->
                                    </div><!-- /.product-item -->


                                    <div class="product-item product-item-holder">
                                        <div class="ribbon green"><span>bestseller</span></div>
                                        <div class="row">
                                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                <div class="image">
                                                    <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product-02.jpg">
                                                </div>
                                            </div><!-- /.image-holder -->
                                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8
                                                            SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                    <div class="excerpt">
                                                        <div class="star-holder">
                                                            <div class="star" data-score="4"
                                                                 style="cursor: pointer; width: 80px;"><img
                                                                        src="{{ asset('static/frontend') }}/assets/images/star-on.png" alt="1"
                                                                        title="bad"><img
                                                                        src="{{ asset('static/frontend') }}/assets/images/star-on.png" alt="2"
                                                                        title="poor"><img
                                                                        src="{{ asset('static/frontend') }}/assets/images/star-on.png"
                                                                        alt="3" title="regular"><img
                                                                        src="{{ asset('static/frontend') }}/assets/images/star-on.png" alt="4"
                                                                        title="good"><img
                                                                        src="{{ asset('static/frontend') }}/assets/images/star-off.png"
                                                                        alt="5" title="gorgeous"><input
                                                                        type="hidden" name="score" value="4"></div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                                            lobortis euismod erat sit amet porta. Etiam venenatis ac
                                                            diam ac tristique. Morbi accumsan consectetur odio ut
                                                            tincidunt.</p>
                                                    </div>
                                                    <div class="addto-compare">
                                                        <a class="btn-add-to-compare" href="#">add to compare list</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.body-holder -->
                                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                <div class="right-clmn">
                                                    <div class="price-current">$1199.00</div>
                                                    <div class="price-prev">$1399.00</div>
                                                    <div class="availability"><label>availability:</label><span
                                                                class="not-available">out of stock</span></div>
                                                    <a class="le-button disabled" href="#">add to cart</a>
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                </div>
                                            </div><!-- /.price-area -->
                                        </div><!-- /.row -->
                                    </div><!-- /.product-item -->


                                    <div class="product-item product-item-holder">
                                        <div class="ribbon red"><span>sell</span></div>
                                        <div class="row">
                                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                <div class="image">
                                                    <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product-03.jpg">
                                                </div>
                                            </div><!-- /.image-holder -->
                                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8
                                                            SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                    <div class="excerpt">
                                                        <div class="star-holder">
                                                            <div class="star" data-score="2"
                                                                 style="cursor: pointer; width: 80px;"><img
                                                                        src="{{ asset('static/frontend') }}/assets/images/star-on.png" alt="1"
                                                                        title="bad"><img
                                                                        src="{{ asset('static/frontend') }}/assets/images/star-on.png" alt="2"
                                                                        title="poor"><img
                                                                        src="{{ asset('static/frontend') }}/assets/images/star-off.png"
                                                                        alt="3" title="regular"><img
                                                                        src="{{ asset('static/frontend') }}/assets/images/star-off.png" alt="4"
                                                                        title="good"><img
                                                                        src="{{ asset('static/frontend') }}/assets/images/star-off.png"
                                                                        alt="5" title="gorgeous"><input
                                                                        type="hidden" name="score" value="2"></div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                                            lobortis euismod erat sit amet porta. Etiam venenatis ac
                                                            diam ac tristique. Morbi accumsan consectetur odio ut
                                                            tincidunt. </p>
                                                    </div>
                                                    <div class="addto-compare">
                                                        <a class="btn-add-to-compare" href="#">add to compare list</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.body-holder -->
                                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                <div class="right-clmn">
                                                    <div class="price-current">$1199.00</div>
                                                    <div class="price-prev">$1399.00</div>
                                                    <div class="availability"><label>availability:</label><span
                                                                class="available">in stock</span></div>
                                                    <a class="le-button" href="#">add to cart</a>
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                </div>
                                            </div><!-- /.price-area -->
                                        </div><!-- /.row -->
                                    </div><!-- /.product-item -->

                                    <div class="product-item product-item-holder">
                                        <div class="row">
                                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                <div class="image">
                                                    <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product-04.jpg">
                                                </div>
                                            </div><!-- /.image-holder -->
                                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                <div class="body">
                                                    <div class="label-discount green">-50% sale</div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8
                                                            SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                    <div class="excerpt">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                                            lobortis euismod erat sit amet porta. Etiam venenatis ac
                                                            diam ac tristique. Morbi accumsan consectetur odio ut
                                                            tincidunt. </p>
                                                    </div>
                                                    <div class="addto-compare">
                                                        <a class="btn-add-to-compare" href="#">add to compare list</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.body-holder -->
                                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                <div class="right-clmn">
                                                    <div class="price-current">$1199.00</div>
                                                    <div class="price-prev">$1399.00</div>
                                                    <div class="availability"><label>availability:</label><span
                                                                class="available">  in stock</span></div>
                                                    <a class="le-button" href="#">add to cart</a>
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                </div>
                                            </div><!-- /.price-area -->
                                        </div><!-- /.row -->
                                    </div><!-- /.product-item -->

                                    <div class="product-item product-item-holder">
                                        <div class="ribbon green"><span>bestseller</span></div>
                                        <div class="row">
                                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                <div class="image">
                                                    <img alt="" src="{{ asset('static/frontend') }}/assets/images/products/product-05.jpg">
                                                </div>
                                            </div><!-- /.image-holder -->
                                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8
                                                            SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                    <div class="excerpt">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                                                            lobortis euismod erat sit amet porta. Etiam venenatis ac
                                                            diam ac tristique. Morbi accumsan consectetur odio ut
                                                            tincidunt.</p>
                                                    </div>
                                                    <div class="addto-compare">
                                                        <a class="btn-add-to-compare" href="#">add to compare list</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.body-holder -->
                                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                <div class="right-clmn">
                                                    <div class="price-current">$1199.00</div>
                                                    <div class="price-prev">$1399.00</div>
                                                    <div class="availability"><label>availability:</label><span
                                                                class="available">  in stock</span></div>
                                                    <a class="le-button" href="#">add to cart</a>
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                </div>
                                            </div><!-- /.price-area -->
                                        </div><!-- /.row -->
                                    </div><!-- /.product-item -->

                                </div><!-- /.products-list -->

                                <div class="pagination-holder">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 text-left">
                                            <ul class="pagination">
                                                <li class="current"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">next</a></li>
                                            </ul><!-- /.pagination -->
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="result-counter">
                                                Showing <span>1-9</span> of <span>11</span> results
                                            </div><!-- /.result-counter -->
                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.pagination-holder -->

                            </div><!-- /.products-grid #list-view -->

                        </div><!-- /.tab-content -->
                    </div><!-- /.grid-list-products -->

                </section><!-- /#gaming -->
            </div><!-- /.col -->
            <!-- ========================================= CONTENT : END ========================================= -->
        </div><!-- /.container -->
    </section>
@endsection