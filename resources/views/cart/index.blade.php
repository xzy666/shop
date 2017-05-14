@extends('layouts.main')

<?php $total = 0 ;//总金额 ?>

@section('content')
    <section id="cart-page">
        <div class="container">
            <!-- ========================================= CONTENT ========================================= -->
            <div class="col-xs-12 col-md-9 items-holder no-margin">

                @foreach($carts as $cart)
                    <div class="row no-margin cart-item" data-cart-id="{{ $cart->id }}">
                        <div class="col-xs-12 col-sm-2 no-margin">
                            <a href="#" class="thumb-holder">
                                <img class="lazy" alt=""
                                     src="{{ asset('static/frontend') }}/assets/images/products/product111.jpg"
                                     width="73"
                                     height="73">
                            </a>
                        </div>

                        <div class="col-xs-12 col-sm-5 ">
                            <div class="title">
                                <a href="#">{{ $cart->product_name }}</a>
                            </div>
                            <div class="brand">品牌</div>
                        </div>

                        <div class="col-xs-12 col-sm-3 no-margin">
                            <div class="quantity">
                                <div class="le-quantity">
                                    <form>
                                        <a class="js-change-qty minus" href="#reduce"></a>
                                        <input name="quantity" readonly="readonly" type="text" value="{{ $cart->qty }}">
                                        <a class="js-change-qty plus" href="#add"></a>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-2 no-margin">
                            <div class="price">
                                ￥{{ $cart->price }}
                            </div>
                            <a class="close-btn" href="#"></a>
                        </div>
                    </div><!-- /.cart-item -->

                <?php $total +=  $cart->price *  $cart->qty; ?>

                @endforeach
            </div>
            <!-- ========================================= CONTENT : END ========================================= -->

            <!-- ========================================= SIDEBAR ========================================= -->

            <div class="col-xs-12 col-md-3 no-margin sidebar ">
                <div class="widget cart-summary">
                    <h1 class="border">购物车</h1>
                    <div class="body">
                        <ul class="tabled-data no-border inverse-bold">
                            <li>
                                <label>商品合计</label>
                                <div class="value pull-right js-cart-money">￥{{ $total }}</div>
                            </li>

                        </ul>
                        <ul id="total-price" class="tabled-data inverse-bold no-border">
                            <li>
                                <label>总价</label>
                                <div class="value pull-right js-cart-money">￥{{ $total }}</div>
                            </li>
                        </ul>
                        <div class="buttons-holder">
                            <a class="le-button big" href="checkout.html">去结算</a>
                            <a class="simple-link block" href="index.html">继续选购</a>
                        </div>
                    </div>
                </div><!-- /.widget -->

                <div id="cupon-widget" class="widget">
                    <h1 class="border">使用优惠券</h1>
                    <div class="body">
                        <form>
                            <div class="inline-input">
                                <input data-placeholder="输入优惠码" type="text" class="placeholder">
                                <button class="le-button" type="submit">确定</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.widget -->
            </div><!-- /.sidebar -->

            <!-- ========================================= SIDEBAR : END ========================================= -->
        </div>
    </section>
@endsection

@section('js')

    <script>
        $(".js-change-qty").click(function (e) {

            e.preventDefault();
            var currentQty = $(this).parent().parent().find('input').val();
            if ($(this).hasClass('minus')) {

                if (currentQty <= 1) {
                    return;
                }

                currentQty = parseInt(currentQty, 10) - 1;
            } else {
                if ($(this).hasClass('plus')) {
                    currentQty = parseInt(currentQty, 10) + 1;
                }
            }

            var cartId = $(this).parents(".cart-item").attr("data-cart-id");


            $.ajax({
                url: "{{ url('cart/update') }}",
                type: "POST",
                data: {'qty': currentQty, 'cartId': cartId},
                dataType: "json",
                success: function (res) {
                    if (res.status) {

                        updateCartInfo();

                    } else {
                        alert(res.error)
                    }
                },
                error: function () {
                    alert('error')
                }
            });

            $(this).parent().parent().find('input').val(currentQty);

        });
    </script>

@endsection