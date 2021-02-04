@extends('layouts.app')
@section('content')
<section>
    <div class="container" style="margin-top: 53px;">
        <div class="row">
            <div class='col-md-7'>
                <h5 class="pb-4"><b>Checkout</b></h5>
                <div class="add-address-box">
                    <h6><b>Add Address</b></h6>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="pin" placeholder="Enter Your Pin Code*">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="fname" placeholder="First Name*">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name*">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="" placeholder="City/District*">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="" placeholder="State*">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="" rows="3" placeholder="Address*"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="" placeholder="Landmark">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Phone Number*">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 colr">
                                <p>Find location on Google Maps</p>
                            </div>
                            <div class="col-md-6 save">
                            <!-- <a href="{{('/payment-method')}}"> <button>Save and Continue</button></a> -->
                            <a href="{{('/payment-method')}}">Save and Continue</a> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- order summery -->
            <div class="col-md-5 p-5" style="margin-top: 5px;">
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
                                    <td class="right-shift">- Rs.333</td>
                                </tr>

                            </thead>
                        </table>
                    </div>
                    <div class="bottum-border"></div>
                    <div class="checkout" style="    margin: 25px 0px 22px;">
                        <h4>Total Payable
                            <span style="float:right">Rs.63,000</span>
                        </h4>
                    </div>
                </div>
                <div class="secure-pay p-4">
                    <p class="d-flex"><i class="fas fa-shield-alt"></i>Safe and secure payments. Easy returns. 100%
                        Authentic products.</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
