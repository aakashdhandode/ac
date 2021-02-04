@extends('layouts.app')
@section('content')

<section>
<div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class='col-md-7'>
                <h5 class="pb-4"><b>Payment Method</b></h5>
                <div class="add-address-box">
                    <div class="payment-box">
                        <div class="container">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                href="#creditcard" aria-expanded="true" aria-controls="creditcard">
                                                Credit Card
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="creditcard" class="panel-collapse collapse in" role="tabpanel"
                                        aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl
                                                lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat
                                                libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum
                                                laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie
                                                eros. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#debitcard" aria-expanded="false"
                                                aria-controls="debitcard">
                                                Debit Card
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="debitcard" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl
                                                lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat
                                                libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum
                                                laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie
                                                eros. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingtree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#EMI" aria-expanded="false"
                                                aria-controls="EMI">
                                                EMI
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="EMI" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingTree">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl
                                                lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat
                                                libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum
                                                laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie
                                                eros. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingfour">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#upi" aria-expanded="false"
                                                aria-controls="upi">
                                                UPI ID
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="upi" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingfour">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl
                                                lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat
                                                libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum
                                                laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie
                                                eros. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingfive">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#Netbanking" aria-expanded="false"
                                                aria-controls="Netbanking">
                                                Netbanking
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="Netbanking" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingfive">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl
                                                lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat
                                                libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum
                                                laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie
                                                eros. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingsix">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#cash" aria-expanded="false"
                                                aria-controls="cash">
                                                Cash on Delivery
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="cash" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingsix">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl
                                                lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat
                                                libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum
                                                laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie
                                                eros. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
