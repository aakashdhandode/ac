@extends('layouts.app')
@section('content')
<section>
    <div class="container mt-4">
        <div class="row">
            <p>Home/ Air Purifier</p>
        </div>
        <div class="mt-4">
            <div class="row">
                <!-- side menu -->
                <div class="col-md-3">
                    <div class="spacanto-sidebar">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="colr text-right">
                                <p>Reset</p>
                            </div>
                            <!-- type -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#type"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            Lorem Ipsum
                                        </a>
                                    </h4>
                                </div>
                                <div id="type" class="panel-collapse  in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Invertor AC Units">
                                        <label class="form-check-label">
                                            Lorem Ipsum
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Non Invertor AC Units">
                                        <label class="form-check-label">
                                            Lorem Ipsum
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- capacity -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#Capacity" aria-expanded="false"
                                            aria-controls="Capacity">
                                            Coverage Area
                                        </a>
                                    </h4>
                                </div>
                                <div id="Capacity" class="panel-collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="0.8 TR">
                                        <label class="form-check-label">
                                            Lorem Ipsum
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1.0 TR">
                                        <label class="form-check-label">
                                            Lorem Ipsum
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1.2 TR">
                                        <label class="form-check-label">
                                            Lorem Ipsum
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1.5 TR">
                                        <label class="form-check-label">
                                            Lorem Ipsum
                                        </label>
                                    </div>
                                </div>
                            </div>




                            <!-- Filter type -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#filter" aria-expanded="false"
                                            aria-controls="Capacity">
                                            Filter type
                                        </a>
                                    </h4>
                                </div>
                                <div id="filter" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="0.8 TR">
                                        <label class="form-check-label">
                                            Lorem Ipsum
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1.0 TR">
                                        <label class="form-check-label">
                                            Lorem Ipsum
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1.2 TR">
                                        <label class="form-check-label">
                                            Lorem Ipsum
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1.5 TR">
                                        <label class="form-check-label">
                                            Lorem Ipsum
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1.5 TR">
                                        <label class="form-check-label">
                                            Lorem Ipsum
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Brands -->

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#Brands" aria-expanded="false"
                                            aria-controls="Brands">
                                            Brands
                                        </a>
                                    </h4>
                                </div>
                                <div id="Brands" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThree">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Daikin">
                                        <label class="form-check-label">
                                            Daikin
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Mitsubhishi">
                                        <label class="form-check-label">
                                            Mitsubhishi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="O General">
                                        <label class="form-check-label">
                                            O General
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Blue Star">
                                        <label class="form-check-label">
                                            Blue Star
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Carrier">
                                        <label class="form-check-label">
                                            Carrier
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Voltas">
                                        <label class="form-check-label">
                                            Voltas
                                        </label>
                                    </div>
                                </div>
                            </div>



                            <!-- Prices -->

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#Prices" aria-expanded="false"
                                            aria-controls="Prices">
                                            Prices
                                        </a>
                                    </h4>
                                </div>
                                <div id="Prices" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThree">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="From low to high">
                                        <label class="form-check-label">
                                            From low to high
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="From high to low">
                                        <label class="form-check-label">
                                            From high to low
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end side menu -->

                <!-- start products  -->
                <div class="col-sm-9" style="border-left:1px solid gray">
                    <div class="title">
                        <p style="text-align:left;">
                            23 Results found
                            <span style="float:right;">
                                Sort by:
                                <span>
                                    <select>
                                        <option selected>Newest</option>
                                        <option value="3">Three</option>
                                        <option value="1">One</option>
                                        <option value="0">Zero</option>
                                        <option value="2">Two</option>
                                        <option value="8">Eight</option>
                                    </select>
                                </span>
                            </span>
                        </p>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
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


                        <div class="col-md-4">
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

                        <div class="col-md-4">
                            <div class="clients-box">
                                <a href="{{('productpage')}}">
                                    <div class="product-card">
                                        <img src="https://freepngimg.com/thumb/air_conditioner/6-2-ac-picture.png"
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

                        <div class="col-md-4">
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

                        <div class="col-md-4">
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

                        <div class="col-md-4">
                            <div class="clients-box">
                                <a href="{{('productpage')}}">
                                    <div class="product-card">
                                        <img src="https://siriyellowpages.com/admin/listing/109-1.jpg"
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

                        <div class="col-md-4">
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

                        <div class="col-md-4">
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


                        <div class="col-md-4">
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
                    </div>

                </div>
            </div>
        </div>
</section>
@endsection
