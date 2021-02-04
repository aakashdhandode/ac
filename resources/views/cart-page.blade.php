@extends('layouts.app')
@section('content')
<section>
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <!-- my cart -->
            <div class='col-md-7'>
                <div class="mycart-page">
                    <!-- <h5><b>My Cart</b></h5> -->
                    <div class="cart-titles">
                        <h5>My Cart</h5>
                        <p>1 Item</p>
                    </div>
                    <div class="mt-4">
                        <div class="order-box">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="http://www.pngall.com/wp-content/uploads/2/Split-Air-Conditioner-Transparent.png"
                                    class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <div class="product-details">
                                    <div class="myorder-title-price d-flex">
                                        <h4>Voltas Adjustable <br />Inverter Split Ac 185v Ads(R32)</h4>
                                        <span>Rs.63,333</span>
                                    </div>
                                    <table>
                                        <tr>
                                            <td>Type</td>
                                            <td>Invertor AC Unit</td>
                                        </tr>
                                        <tr>
                                            <td>Tonnage</td>
                                            <td>1 Ton</td>
                                        </tr>
                                        <tr>
                                            <td>Quantity</td>
                                            <td>
                                                <select style="width: 65px;padding-left: 13px;">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="cart-remove">
                                        <a href="#">Remove</a>
                                    </div>
                                </div>
                            </div>
</div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- order summery -->
            <div class="col-md-5 ps-5">
                <div class="summery-box">
                    <h5>Order Summary</h5>
                    <div class="summery-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Bag Total</td>
                                    <td class="right-shift">Rs.63,333</td>
                                </tr>
                                <tr>
                                    <td>Shipping Charge</td>
                                    <td class="right-shift">FREE</td>
                                </tr>
                                <tr>
                                    <td>Bag subtotal</td>
                                    <td class="right-shift">Rs.63,333</td>
                                </tr>
                                <tr>
                                    <td>Discount</td>
                                    <td class="right-shift colr">- Rs.333</td>
                                </tr>
                                <tr>
                                    <td><a href="" class="colr">Apply Discount</a></td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="checkout">
                        <h4>Total<br />
                            <span>Rs.63,000</span>
                        </h4>
                        <a href="{{('/add-address')}}"><button>Checkout</button></a>
                    </div>
                </div>
                <div class="secure-pay p-4">
                    <p class="d-flex">
                        <i class="fas fa-shield-alt"></i>
                    Safe and secure payments. Easy returns. 100%
                        Authentic products.</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
