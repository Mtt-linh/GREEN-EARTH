@extends("frontend.layout")
@section("content")
<<<<<<< HEAD
=======
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
>>>>>>> 195e1dbe3152a8c4df5eca4e16d46cc547ca394b

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
<<<<<<< HEAD
                    <h2 style="text-align: center ; margin-top: 20px">Shopping Cart</h2>
                </div>
                <div class="col-lg-12" style="margin-bottom: 30px;margin-top: 30px;}">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                            <tr >
                                <th style="text-align: left">Products</th>
=======
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
>>>>>>> 195e1dbe3152a8c4df5eca4e16d46cc547ca394b
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
<<<<<<< HEAD
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="{{asset("img/cart/cart-1.jpg")}}" alt="">
                                    <h5>Vegetable’s Package</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    $55.00
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    $110.00
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="{{asset("img/cart/cart-2.jpg")}}" alt="">
                                    <h5>Fresh Garden Vegetable</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    $39.00
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    $39.99
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="img/cart/cart-3.jpg" alt="">
                                    <h5>Organic Bananas</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    $69.00
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    $69.99
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close"></span>
                                </td>
                            </tr>
=======
                            @foreach($products as $p)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{$p->getImage()}}" alt="">
                                        <h5>{{$p->__get("product_name")}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{$p->getPrice()}}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="{{$p->cart_qty}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        ${{$p->cart_qty * $p->__get("price")}}
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                            @endforeach
>>>>>>> 195e1dbe3152a8c4df5eca4e16d46cc547ca394b
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
<<<<<<< HEAD
                            <li>Subtotal <span>$454.98</span></li>
                            <li>Total <span>$454.98</span></li>
                        </ul>
                        <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
=======
                            <li>Subtotal <span>${{$grandTotal}}</span></li>
                            <li>Total <span>${{$grandTotal}}</span></li>
                        </ul>
                        <a href="{{url("/checkout")}}" class="primary-btn">PROCEED TO CHECKOUT</a>
>>>>>>> 195e1dbe3152a8c4df5eca4e16d46cc547ca394b
                    </div>
                </div>
            </div>
        </div>
    </section>
<<<<<<< HEAD
    <!-- Shoping Cart Section End -->
=======
>>>>>>> 195e1dbe3152a8c4df5eca4e16d46cc547ca394b

@endsection