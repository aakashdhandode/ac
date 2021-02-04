@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section>
    <div class="container">
        <div class="top-page-links">
            <a href="">Home / Ac Units / Compare</a>
        </div>

        <div class="row mt-3">
            <div class="col-md-3">
                <div class="compare-product-title">
                    <h4>COMPARE MODELS</h4>
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
                <div class="compare-add-remove">
                    <div class="add">
                        <a href="">Add to Cart</a>
                    </div>
                    <div class="remove">
                        <a href="">Remove</a>
                    </div>
                </div>
            </div>
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
                <div class="compare-add-remove">
                    <div class="add">
                        <a href="">Add to Cart</a>
                    </div>
                    <div class="remove">
                        <a href="">Remove</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
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
                <div class="compare-add-remove">
                    <div class="add">
                        <a href="">Add to Cart</a>
                    </div>
                    <div class="remove">
                        <a href="">Remove</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Product Specifications
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body coll-table">
                            <p>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Tonnage</td>
                                            <td>1 Ton</td>
                                            <td>1 Ton</td>
                                            <td>1 Ton</td>
                                        </tr>
                                        <tr>
                                            <td>Full Load Capacity [W]</td>
                                            <td>5200</td>
                                            <td>5200</td>
                                            <td>5200</td>
                                        </tr>
                                        <tr>
                                            <td>Half Load Capacity [W]</td>
                                            <td>2600</td>
                                            <td>2600</td>
                                            <td>2600</td>
                                        </tr>
                                        <tr>
                                            <td>Compressor Type</td>
                                            <td>High EER Twin Rotary</td>
                                            <td>High EER Twin Rotary</td>
                                            <td>High EER Twin Rotary</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Porformance
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id
                                pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac,
                                rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam
                                vitae. Curabitur molestie eros. </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Operations
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                        aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id
                                pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac,
                                rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam
                                vitae. Curabitur molestie eros. </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingfour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Dimensions
                            </a>
                        </h4>
                    </div>
                    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel"
                        aria-labelledby="headingfour">
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id
                                pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac,
                                rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam
                                vitae. Curabitur molestie eros. </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingfive">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Unit Weight
                            </a>
                        </h4>
                    </div>
                    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel"
                        aria-labelledby="headingfive">
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id
                                pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac,
                                rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam
                                vitae. Curabitur molestie eros. </p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>


@endsection
