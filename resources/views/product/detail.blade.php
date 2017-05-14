@extends('layouts.main')

@section('content')

    <div id="single-product">
        <div class="container">

            <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                    <div id="owl-single-product" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 2598px; left: 0px; display: block;">
                                <div class="owl-item" style="width: 433px;">
                                    <div class="single-product-gallery-item" id="slide1">
                                        <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                                            <img class="img-responsive" alt=""
                                                 src="{{ asset('static/frontend') }}/assets/images/products/product-gallery-01.jpg">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 433px;">
                                    <div class="single-product-gallery-item" id="slide2">
                                        <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                                            <img class="img-responsive" alt=""
                                                 src="{{ asset('static/frontend') }}/assets/images/products/product-gallery-01.jpg">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 433px;">
                                    <div class="single-product-gallery-item" id="slide3">
                                        <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                                            <img class="img-responsive" alt=""
                                                 src="{{ asset('static/frontend') }}/assets/images/products/product-gallery-01.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.single-product-gallery-item -->

                        <!-- /.single-product-gallery-item -->

                        <!-- /.single-product-gallery-item -->
                    </div><!-- /.single-product-slider -->


                    <div class="single-product-gallery-thumbs gallery-thumbs">

                        <div id="owl-single-product-thumbnails" class="owl-carousel owl-theme"
                             style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 1296px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 72px;"><a class="horizontal-thumb active"
                                                                                  data-target="#owl-single-product"
                                                                                  data-slide="0" href="#slide1">
                                            <img width="67" alt=""
                                                 src="{{ asset('static/frontend') }}/assets/images/products/gallery-thumb-01.jpg">
                                        </a></div>
                                    <div class="owl-item" style="width: 72px;"><a class="horizontal-thumb"
                                                                                  data-target="#owl-single-product"
                                                                                  data-slide="1" href="#slide2">
                                            <img width="67" alt=""
                                                 src="{{ asset('static/frontend') }}/assets/images/products/gallery-thumb-01.jpg">
                                        </a></div>
                                    <div class="owl-item" style="width: 72px;"><a class="horizontal-thumb"
                                                                                  data-target="#owl-single-product"
                                                                                  data-slide="2" href="#slide3">
                                            <img width="67" alt=""
                                                 src="{{ asset('static/frontend') }}/assets/images/products/gallery-thumb-01.jpg">
                                        </a></div>
                                    <div class="owl-item" style="width: 72px;"><a class="horizontal-thumb"
                                                                                  data-target="#owl-single-product"
                                                                                  data-slide="0" href="#slide1">
                                            <img width="67" alt=""
                                                 src="{{ asset('static/frontend') }}/assets/images/products/gallery-thumb-01.jpg">
                                        </a></div>
                                    <div class="owl-item" style="width: 72px;"><a class="horizontal-thumb"
                                                                                  data-target="#owl-single-product"
                                                                                  data-slide="1" href="#slide2">
                                            <img width="67" alt=""
                                                 src="{{ asset('static/frontend') }}/assets/images/products/gallery-thumb-01.jpg">
                                        </a></div>
                                    <div class="owl-item" style="width: 72px;"><a class="horizontal-thumb"
                                                                                  data-target="#owl-single-product"
                                                                                  data-slide="2" href="#slide3">
                                            <img width="67" alt=""
                                                 src="{{ asset('static/frontend') }}/assets/images/products/gallery-thumb-01.jpg">
                                        </a></div>
                                    <div class="owl-item" style="width: 72px;"><a class="horizontal-thumb"
                                                                                  data-target="#owl-single-product"
                                                                                  data-slide="0" href="#slide1">
                                            <img width="67" alt=""
                                                 src="{{ asset('static/frontend') }}/assets/images/products/gallery-thumb-01.jpg">
                                        </a></div>
                                    <div class="owl-item" style="width: 72px;"><a class="horizontal-thumb"
                                                                                  data-target="#owl-single-product"
                                                                                  data-slide="1" href="#slide2">
                                            <img width="67" alt=""
                                                 src="{{ asset('static/frontend') }}/assets/images/products/gallery-thumb-01.jpg">
                                        </a></div>
                                    <div class="owl-item" style="width: 72px;"><a class="horizontal-thumb"
                                                                                  data-target="#owl-single-product"
                                                                                  data-slide="2" href="#slide3">
                                            <img width="67" alt=""
                                                 src="{{ asset('static/frontend') }}/assets/images/products/gallery-thumb-01.jpg">
                                        </a></div>
                                </div>
                            </div>


                        </div><!-- /#owl-single-product-thumbnails -->

                        <div class="nav-holder left hidden-xs">
                            <a class="prev-btn slider-prev" data-target="#owl-single-product-thumbnails"
                               href="#prev"></a>
                        </div><!-- /.nav-holder -->

                        <div class="nav-holder right hidden-xs">
                            <a class="next-btn slider-next" data-target="#owl-single-product-thumbnails"
                               href="#next"></a>
                        </div><!-- /.nav-holder -->

                    </div><!-- /.gallery-thumbs -->

                </div><!-- /.single-product-gallery -->
            </div><!-- /.gallery-holder -->
            <div class="no-margin col-xs-12 col-sm-7 body-holder">
                <div class="body">
                    <div class="title"><a href="#">{{ $product->name }}</a></div>
                    <div class="brand">品牌</div>

                    <div class="excerpt">
                        <p>商品描述信息</p>
                    </div>

                    <div class="prices">
                        <div class="price-current">￥{{ $product->price }}</div>
                        <!--<div class="price-prev">$2199.00</div>-->
                    </div>

                    <div class="qnt-holder product-detail">
                        <div class="le-quantity">
                            <form>
                                <a class="minus" href="#reduce"></a>
                                <input id="inputQty" name="quantity" readonly="readonly" type="text" value="1">
                                <a class="plus" href="#add"></a>
                            </form>
                        </div>
                        <a id="addto-cart" href="javascript:;" class="le-button huge">加入购物车</a>
                    </div><!-- /.qnt-holder -->
                </div><!-- /.body -->

            </div><!-- /.body-holder -->
        </div><!-- /.container -->
    </div>



    <section id="single-product-tab">
        <div class="container">
            <div class="tab-holder">

                <ul class="nav nav-tabs simple">
                    <li class="active"><a href="#description" data-toggle="tab">商品介绍</a></li>
                    <li><a href="#additional-info" data-toggle="tab">规格包装</a></li>
                    <li><a href="#reviews" data-toggle="tab">商品评价</a></li>
                </ul><!-- /.nav-tabs -->

                <div class="tab-content">
                    <div class="tab-pane active" id="description">
                        {{ $product->description ? $product->description->content :'' }}
                    </div><!-- /.tab-pane #description -->

                    <div class="tab-pane" id="additional-info">
                        <ul class="tabled-data">
                            <li>
                                <label>重量</label>
                                <div class="value">7.25 kg</div>
                            </li>
                            <li>
                                <label>规格</label>
                                <div class="value">90x60x90 cm</div>
                            </li>
                            <li>
                                <label>尺寸</label>
                                <div class="value">one size fits all</div>
                            </li>
                            <li>
                                <label>颜色</label>
                                <div class="value">white</div>
                            </li>
                            <li>
                                <label>质保</label>
                                <div class="value">5 years</div>
                            </li>
                        </ul><!-- /.tabled-data -->

                        <div class="meta-row">
                            <div class="inline">
                                <label>货号:</label>
                                <span>54687621</span>
                            </div><!-- /.inline -->

                            <span class="seperator">/</span>

                            <div class="inline">
                                <label>标签:</label>
                                <span><a href="#">快</a>,</span>
                                <span><a href="#">准</a>,</span>
                                <span><a href="#">狠</a></span>
                            </div><!-- /.inline -->
                        </div><!-- /.meta-row -->

                    </div><!-- /.tab-pane #additional-info -->


                    <div class="tab-pane" id="reviews">
                        <div class="comments">
                            <div class="comment-item">
                                <div class="row no-margin">
                                    <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                        <div class="avatar">
                                            <img alt="avatar"
                                                 src="{{ asset('static/frontend') }}/assets/images/default-avatar.jpg">
                                        </div><!-- /.avatar -->
                                    </div><!-- /.col -->

                                    <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">
                                        <div class="comment-body">
                                            <div class="meta-info">
                                                <div class="author inline">
                                                    <a href="#" class="bold">John Smith</a>
                                                </div>
                                                <div class="star-holder inline">
                                                    <div class="star" data-score="4"
                                                         style="cursor: pointer; width: 80px;"><img
                                                                src="{{ asset('static/frontend') }}/assets/images/star-on.png"
                                                                alt="1" title="bad"><img
                                                                src="{{ asset('static/frontend') }}/assets/images/star-on.png"
                                                                alt="2" title="poor"><img
                                                                src="{{ asset('static/frontend') }}/assets/images/star-on.png"
                                                                alt="3" title="regular"><img
                                                                src="{{ asset('static/frontend') }}/assets/images/star-on.png"
                                                                alt="4" title="good"><img
                                                                src="{{ asset('static/frontend') }}/assets/images/star-off.png"
                                                                alt="5" title="gorgeous"><input type="hidden"
                                                                                                name="score" value="4">
                                                    </div>
                                                </div>
                                                <div class="date inline pull-right">
                                                    12.07.2013
                                                </div>
                                            </div><!-- /.meta-info -->
                                            <p class="comment-text">
                                                Integer id purus ultricies nunc tincidunt congue vitae nec felis.
                                                Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien.
                                                Vestibulum egestas interdum tellus id venenatis.
                                            </p><!-- /.comment-text -->
                                        </div><!-- /.comment-body -->

                                    </div><!-- /.col -->

                                </div><!-- /.row -->
                            </div><!-- /.comment-item -->

                            <div class="comment-item">
                                <div class="row no-margin">
                                    <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                        <div class="avatar">
                                            <img alt="avatar"
                                                 src="{{ asset('static/frontend') }}/assets/images/default-avatar.jpg">
                                        </div><!-- /.avatar -->
                                    </div><!-- /.col -->

                                    <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">
                                        <div class="comment-body">
                                            <div class="meta-info">
                                                <div class="author inline">
                                                    <a href="#" class="bold">Jane Smith</a>
                                                </div>
                                                <div class="star-holder inline">
                                                    <div class="star" data-score="5"
                                                         style="cursor: pointer; width: 80px;"><img
                                                                src="{{ asset('static/frontend') }}/assets/images/star-on.png"
                                                                alt="1" title="bad"><img
                                                                src="{{ asset('static/frontend') }}/assets/images/star-on.png"
                                                                alt="2" title="poor"><img
                                                                src="{{ asset('static/frontend') }}/assets/images/star-on.png"
                                                                alt="3" title="regular"><img
                                                                src="{{ asset('static/frontend') }}/assets/images/star-on.png"
                                                                alt="4" title="good"><img
                                                                src="{{ asset('static/frontend') }}/assets/images/star-on.png"
                                                                alt="5" title="gorgeous"><input type="hidden"
                                                                                                name="score" value="5">
                                                    </div>
                                                </div>
                                                <div class="date inline pull-right">
                                                    12.07.2013
                                                </div>
                                            </div><!-- /.meta-info -->
                                            <p class="comment-text">
                                                Integer id purus ultricies nunc tincidunt congue vitae nec felis.
                                                Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien.
                                                Vestibulum egestas interdum tellus id venenatis.
                                            </p><!-- /.comment-text -->
                                        </div><!-- /.comment-body -->

                                    </div><!-- /.col -->

                                </div><!-- /.row -->
                            </div><!-- /.comment-item -->

                            <div class="comment-item">
                                <div class="row no-margin">
                                    <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                        <div class="avatar">
                                            <img alt="avatar"
                                                 src="{{ asset('static/frontend') }}/assets/images/default-avatar.jpg">
                                        </div><!-- /.avatar -->
                                    </div><!-- /.col -->

                                    <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">
                                        <div class="comment-body">
                                            <div class="meta-info">
                                                <div class="author inline">
                                                    <a href="#" class="bold">John Doe</a>
                                                </div>
                                                <div class="star-holder inline">
                                                    <div class="star" data-score="3"
                                                         style="cursor: pointer; width: 80px;"><img
                                                                src="{{ asset('static/frontend') }}/assets/images/star-on.png"
                                                                alt="1" title="bad"><img
                                                                src="{{ asset('static/frontend') }}/assets/images/star-on.png"
                                                                alt="2" title="poor"><img
                                                                src="{{ asset('static/frontend') }}/assets/images/star-on.png"
                                                                alt="3" title="regular"><img
                                                                src="{{ asset('static/frontend') }}/assets/images/star-off.png"
                                                                alt="4" title="good"><img
                                                                src="{{ asset('static/frontend') }}/assets/images/star-off.png"
                                                                alt="5" title="gorgeous"><input type="hidden"
                                                                                                name="score" value="3">
                                                    </div>
                                                </div>
                                                <div class="date inline pull-right">
                                                    12.07.2013
                                                </div>
                                            </div><!-- /.meta-info -->
                                            <p class="comment-text">
                                                Integer id purus ultricies nunc tincidunt congue vitae nec felis.
                                                Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien.
                                                Vestibulum egestas interdum tellus id venenatis.
                                            </p><!-- /.comment-text -->
                                        </div><!-- /.comment-body -->

                                    </div><!-- /.col -->

                                </div><!-- /.row -->
                            </div><!-- /.comment-item -->
                        </div><!-- /.comments -->

                        <div class="add-review row">
                            <div class="col-sm-8 col-xs-12">
                                <div class="new-review-form">
                                    <h2>Add review</h2>
                                    <form id="contact-form" class="contact-form" method="post">
                                        <div class="row field-row">
                                            <div class="col-xs-12 col-sm-6">
                                                <label>name*</label>
                                                <input class="le-input">
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <label>email*</label>
                                                <input class="le-input">
                                            </div>
                                        </div><!-- /.field-row -->

                                        <div class="field-row star-row">
                                            <label>your rating</label>
                                            <div class="star-holder">
                                                <div class="star big" data-score="0"
                                                     style="cursor: pointer; width: 80px;"><img
                                                            src="{{ asset('static/frontend') }}/assets/images/star-big-off.png"
                                                            alt="1" title="bad"><img
                                                            src="{{ asset('static/frontend') }}/assets/images/star-big-off.png"
                                                            alt="2" title="poor"><img
                                                            src="{{ asset('static/frontend') }}/assets/images/star-big-off.png"
                                                            alt="3" title="regular"><img
                                                            src="{{ asset('static/frontend') }}/assets/images/star-big-off.png"
                                                            alt="4" title="good"><img
                                                            src="{{ asset('static/frontend') }}/assets/images/star-big-off.png"
                                                            alt="5" title="gorgeous"><input type="hidden" name="score">
                                                </div>
                                            </div>
                                        </div><!-- /.field-row -->

                                        <div class="field-row">
                                            <label>your review</label>
                                            <textarea rows="8" class="le-input"></textarea>
                                        </div><!-- /.field-row -->

                                        <div class="buttons-holder">
                                            <button type="submit" class="le-button huge">提交</button>
                                        </div><!-- /.buttons-holder -->
                                    </form><!-- /.contact-form -->
                                </div><!-- /.new-review-form -->
                            </div><!-- /.col -->
                        </div><!-- /.add-review -->

                    </div><!-- /.tab-pane #reviews -->
                </div><!-- /.tab-content -->

            </div><!-- /.tab-holder -->
        </div><!-- /.container -->
    </section>


@endsection

@section('js')

    <script>
        $(function(){
            $("#addto-cart").click(function(){

                var productId = {{ $product->id }};

                var qty  = $("#inputQty").val();

                $.ajax({
                    url: "{{ url('cart/add') }}",
                    type: "POST",
                    data: {"product_id":productId, "qty" : qty },
                    dataType: "json",
                    success: function (res) {
                        if(res.status){
                            alert(res.message)
                        }else{
                            alert(res.error)
                        }
                    },
                    error: function () {
                        alert("网络出错了");
                    }
                });

            });
        })
    </script>

@endsection