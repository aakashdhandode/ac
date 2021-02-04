@extends('layouts.app')
@section('content')
<style>

</style>

<div id="demo" class="carousel slide" data-ride="carousel">
    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <!-- <img src="https://jssors8.azureedge.net/demos/img/gallery/980x380/043.jpg" alt="Los Angeles" width="100%" height="400"> -->
            <img src="{!! asset('images/benner.png') !!}" alt="" class="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="{!! asset('images/benner.png') !!}" alt="" class="img-fluid"> </div>
        <div class="carousel-item">
            <img src="{!! asset('images/benner.png') !!}" alt="" class="img-fluid"> </div>
    </div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
</div>
<!-- card -->
<div class="container mt-5">
    <div class="index-product-title">
        <h5>Top Selling AC Units</h5>
        <a href="{{('/acunit')}}">
            <p>See More</p>
        </a>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://www.shoutlo.com/uploads/articles/item-header-img-voltas-185-eyr-split-ac.jpg"
                            class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://bizimages.withfloats.com/actual/5c962f512a945a00019f52e6.jpg"
                            class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://freepngimg.com/thumb/air_conditioner/6-2-ac-picture.png" class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://www.mylloyd.com/media/products/small43.jpg" class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Top Selling Portable AC Units row start -->
    <div class="index-product-title mt-5">
        <h5>Top Selling Portable AC Units</h5>
        <a href="{{('/portable-ac-units')}}">
            <p>See More</p>
        </a>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://lowpricemasters.com/uploads/products/photos/lK32Off8k8ODURLTNT9GST1ktzlkH7eAKrPDVFjz.jpeg"
                            class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://siriyellowpages.com/admin/listing/109-1.jpg" class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://srtechnicool.co.za/wp-content/uploads/2018/12/Samsung-AR5500T11.png"
                            class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://www.lg.com/ph/images/residential-air-conditioners/md05180204/gallery/medium07.jpg"
                            class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Top Selling Water Cooler Filter row start -->
    <div class="index-product-title mt-5">
        <h5>Top Selling Water Cooler Filter</h5>
        <a href="{{('/water-cooler')}}">
            <p>See More</p>
        </a>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://d2pa5gi5n2e1an.cloudfront.net/webp/global/images/product/airconditioners/LG_HS_18IPM/LG_HS_18IPM_L_3.jpg"
                            class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/41QrXrOTCRL._AC_SY400_.jpg"
                            class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/3140ne7HbyL._AC_SY400_.jpg"
                            class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJ7qDz6XTeQ5oWsq18T_P-8Io0OCgEQac75Q&usqp=CAU"
                            class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Top Selling Air Purifier Filter row start -->
    <div class="index-product-title mt-5">
        <h5>Top Selling Air Purifier Filter</h5>
        <a href="{{('/air-purifier')}}">
            <p>See More</p>
        </a>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://st2.depositphotos.com/1001877/6144/i/950/depositphotos_61447297-stock-photo-air-conditioner-system-isolated-on.jpg"
                            class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://www.orissapost.com/wp-content/uploads/2019/05/AIR-CONDITIONERS-1024x860.jpg"
                            class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://www.airedalecooling.com/wp-content/uploads/2017/07/home-cooling-unit.png"
                            class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="clients-box">
                <a href="{{('productpage')}}">
                    <div class="product-card">
                        <img src="https://5.imimg.com/data5/JG/UY/MY-62970840/split-ac-lg-500x500.jpg"
                            class="img-fluid">
                    </div>
                    <div class="product-details">
                        <p>VOLTAS ADJUSTABLE <br /> INVERTER SPLIT AC 185V ADS(R32)</p>
                        <table>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td class="text-right">1 TON</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td class="text-right">5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">MRP</td>
                                <td class="text-right">Rs.63,333</td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <!-- select city popup form -->
    <section>
        <div class="modal fade" id="selectCity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width:390px">
                <div class="modal-content">
                    <div class="modal-header" style="border-bottom: none;">
                        <h4 class="modal-title log-title mt-3 border-none" id="exampleModalLabel">Select City</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <select class="form-control" style="height: calc(2em + 0.75rem + 2px);" required>
                                    <option>Default select</option>
                                    <option>Hydrabad</option>
                                </select>
                            </div>
                            <div class="pop-up-login text-center">
                                <button type="button" class="btn mt-4 mb-5 w-100"
                                    onclick="window.location='{{('/home') }}'">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /select city -->


    <!-- login pop up -->
    <section>
        <div class="modal fade bd-example-modal-sm" id="login" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header pb-0" style="border:none">
                        <h5 class="modal-title mt-3 log-title border-none" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="recipient-name" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="recipient-name" placeholder="Password">
                            </div>
                            <div class="text-right mt-4 mb-4">
                                <h6>Forgot Password ?</h6>
                            </div>
                            <div class="pop-up-login text-center">
                                <button class="btn w-100">Login</button>
                                <p>New Member?
                                    <span><a href="" data-toggle="modal" data-target="#sign" data-dismiss="modal">Sign Up </a></span>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->

    <!-- login pop up -->
    <section>
        <div class="modal fade bd-example-modal-sm" id="login" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header pb-0" style="border:none">
                        <h5 class="modal-title mt-3 log-title border-none" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="recipient-name" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="recipient-name" placeholder="Password">
                            </div>
                            <div class="text-right mt-4 mb-4">
                                <h6>Forgot Password ?</h6>
                            </div>
                            <div class="pop-up-login text-center">
                                <button class="btn w-100">Login</button>
                                <p>New Member?
                                    <span><a href="" data-toggle="modal" data-target="#sign" data-dismiss="modal">Sign Up </a></span>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->


    <!-- sign up form -->


    <section>
        <div class="modal fade bd-example-modal-sm" id="sign" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header pb-0" style="border:none">
                        <h5 class="modal-title mt-3 border-none log-title" id="exampleModalLabel">Sign Up</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Select City*</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="recipient-name" placeholder="Phone Number*">
                            </div>
                            <div class="form-group">
                                <input type="Email" class="form-control" id="recipient-name" placeholder="Email Id">
                            </div>
                            <div class="pop-up-login text-center">
                                <button class="btn w-100" data-toggle="modal" data-target="#otp" data-dismiss="modal">Get OTP</button>
                                <p>Already Registered?<span>
                                        <a href="" class="colr" data-toggle="modal" data-target="#login" data-dismiss="modal">
                                            Sign In
                                        </a>
                                    </span></p>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end signup -->
    <!-- send otp -->
    <section>
        <div class="modal fade bd-example-modal-sm" id="otp" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header pb-0" style="border:none">
                        <h5 class="modal-title mt-3 border-none log-title" id="exampleModalLabel">Verify OTP</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="recipient-name" placeholder="Enter OTP">
                            </div>
                            <div class="text-center">0<span id="getotp"></span></div>
                            <div class="pop-up-login text-center">
                                <button class="btn w-100">Verify</button>
                                <p> Didn’t receive OTP?<span>Resend</span></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </div>

    <!-- otp timer counter -->







<!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <h5>Account</h5>
                    <li><a href="">My Orders</a></li>
                    <li><a href="">My Account</a></li>
                    <li><a href="">Return Policy</a></li>
                    <li><a href="">Support</a></li>
                </div>
                <div class="col-sm-3">
                    <h5>Company</h5>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                    <li><a href="">Privacy Policy</a></li>
                </div>
                <div class="col-sm-3">
                    <div class="mt-4">

                        <div class="footer-icon">
                            <p class="d-flex">
                                <img src="https://www.flaticon.com/svg/static/icons/svg/3076/3076636.svg" alt="">
                                100% guarantee for product</p>
                        </div>
                        <div class="footer-icon">
                            <p class="d-flex">
                                <img src="https://www.flaticon.com/svg/static/icons/svg/3163/3163274.svg" alt="">
                                Easy return policy</p>
                        </div>
                        <div class="footer-icon">
                            <p class="d-flex">
                                <img src="https://www.flaticon.com/svg/static/icons/svg/411/411763.svg" alt="">
                                Get free delivery for every order above Rs. xxx</p>
                        </div>
                    </div>
                </div>
                <div class="text-center col-12" style="margin: 106px 0 0 0;">
                    <p>Copyright © 2020. All rights reserved. | Designed & Developed by <a href="https://odms.in/"
                            target="_blank">ODMS PVT LTD</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
    @endsection
