@extends('layouts.app')
@section('content')
<style>

</style>
<section>
    <div class="container">
        <div class="top-page-links">
            <a href="">Home/ AC Units/ Product Page </a>
        </div>
        <div class="row">
            <div class="col-sm-6 productpage">
                <img src="http://www.pngall.com/wp-content/uploads/2/Split-Air-Conditioner-Transparent.png"
                    class="img-fluid" alt="">
            </div>
            <div class="col-sm-6">
                <div class="product-page">
                    <h3>Voltas Adjustable <br />Inverter Split Ac 185v Ads(R32)</h3>
                    <div class="productpage mt-3">
                        <table>
                            <tr>
                                <td class="title-color">Type</td>
                                <td>Invertor AC Unit</td>
                            </tr>
                            <tr>
                                <td class="title-color">Tonnage</td>
                                <td>Type</td>
                            </tr>
                            <tr>
                                <td class="title-color">Star Rating</td>
                                <td>5 Stars</td>
                            </tr>
                            <tr>
                                <td class="title-color">Features</td>
                                <td>Remote Control, Auto Clean</td>
                            </tr>
                            <tr>
                                <td class="title-color">Warranty</td>
                                <td>5 years</td>
                            </tr>
                        </table>
                        <div class="rating-review">
                            <tr>
                                <td><span>4.5<i class="fa fa-star"></i></span></td>
                                <td> 35 Ratings & 12 Reviews</td>
                                <h3>Rs.63,333</h3>
                            </tr>
                        </div>
                        <div>
                            <form>
                                <div class="form-group row pincode mt-4">
                                    <label class="col-sm-2 col-form-label">Quantity</label>
                                    <div class="form-group col-md-3">
                                        <select id="inputState" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pincode</label>
                                    <div class="col-sm-6 pincode">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="buy-addcart">
                                    <div class="row">
                                        <div class="col-sm-4 col-lg-4 d-flex">
                                            <a href="{{('cart-page')}}" class="btn btn-block buynow d-flex flex-sm-column align-items-center">
                                                <span>Buy Now</span>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 col-lg-4  d-flex ">
                                            <a href="#"
                                                class="btn btn-block d-flex addcart flex-sm-column align-items-center justify-content-left justify-content-sm-center">
                                                <span>Add to Cart</span>
                                            </a>
                                        </div>
                                        <div
                                            class="col-sm-4 col-lg-4  offset-sm-4 offset-lg-0  d-flex align-items-center">
                                            <a href="{{('compare')}}" class="addcompare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <h4><p><b>Full Specifications</b></p></h4>
            
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
                              
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Tonnage</td>
                                                <td>1 Ton</td>
                                            </tr>
                                            <tr>
                                                <td>Full Load Capacity [W]</td>
                                                <td>5200</td>

                                            </tr>
                                            <tr>
                                                <td>Half Load Capacity [W]</td>
                                                <td>2600</td>
                                            </tr>
                                            <tr>
                                                <td>Compressor Type</td>
                                                <td>High EER Twin Rotary</td>

                                            </tr>
                                        </tbody>
                                    </table>
                            
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
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum
                                    id
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum
                                    id
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum
                                    id
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum
                                    id
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
</section>
<section>
    <div class="container mt-5">
        <div class="rating-title">
            <h4 style="text-align:left;">
                <p><b> Ratings and reviews</b></p>
                <span style="float:right;font-size: 20px;">
                    <a href="" class="colr">See All</a>
                </span>
            </h4>
        </div>
        <div class="total-review mt-4">
            <tr>
                <td><span>4.5<i class="fa fa-star"></i></span></td>
                <td> 35 Ratings & 12 Reviews</td>
            </tr><br/>
            <button class="write-review-button">Write your review</button>
        </div>
        

        <div class="rating-and-story">
        <h4 class="rating4">4 Rating </h4>
            <div class="starrating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <div class="story">
                    <h4>Good Product at this price.</h4>
                    <h6>Good Product at this price.<br /> I am writing a review of this product after two months of
                        use.. I
                        musf say its overall Good Product.
                        Good Service of Tata CliQ team.<br /> Timely delivery and Installation. Happy to Buy this Budget
                        Product.</h6>
                    <p>Gajendra kakde</p>
                    <hr />
                </div>
            </div>
            <h4 class="rating4">4 Rating </h4>
            <div class="starrating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <div class="story">
                    <h4>Good Product at this price.</h4>
                    <h6>Good Product at this price.<br /> I am writing a review of this product after two months of
                        use.. I
                        musf say its overall Good Product.
                        Good Service of Tata CliQ team.<br /> Timely delivery and Installation. Happy to Buy this Budget
                        Product.</h6>
                    <p>Gajendra kakde</p>
                </div>
            </div>
    </div>

    </div>
</section>
<div class="" style="margin-bottom: 180px;"></div>



@endsection
