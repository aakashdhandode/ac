@extends('layouts.app')
@section('content')

<section>
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-sm-7">
                <div class="wizard">
                    <div class="wizard-inner">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                    aria-expanded="true"></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step8" data-toggle="tab" aria-controls="step8" role="tab"
                                    aria-expanded="false"></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                    aria-expanded="false"></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab"></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab"></a>
                            </li>
                        </ul>
                    </div>




                    <!-- Choose type of AC unit  (AC Service-2) -1step -->
                    <div class="tab-content mt-4" id="main_form">
                        <h5 class="pb-1"><b>AC Service</b></h5>
                        <div class="tab-pane active" role="tabpanel" id="step1">
                            <div class="rate">
                                <h5>Choose type of AC unit</h5>
                                <div class="seerate colr">
                                    <a href="" data-toggle="modal" data-target="#ratecard">See Rate Card</a>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="WINDOW AC">
                                            <label class="form-check-label">
                                            Window Ac
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="SPLIT AC">
                                            <label class="form-check-label">
                                            Split Ac
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="CASSETTE AC">
                                            <label class="form-check-label">
                                            Cassette Ac
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="DUCTABLE AC">
                                            <label class="form-check-label">
                                            Ductable Ac
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="TOWER AC">
                                            <label class="form-check-label">
                                            Tower Ac
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="PACKAGED AC">
                                            <label class="form-check-label">
                                            Packaged Ac
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Vrv Ac Units">
                                            <label class="form-check-label">
                                            Vrv Ac Units
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Ahus-dx Odus">
                                            <label class="form-check-label">
                                            Ahus-dx Odus
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Chilled Water Cassette Units">
                                            <label class="form-check-label">
                                            Chilled Water Cassette Units
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Chilled Water Fcus">
                                            <label class="form-check-label">
                                            Chilled Water Fcus
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Chilled Water Ahus">
                                            <label class="form-check-label">
                                            Chilled Water Ahus
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Portable Ac">
                                            <label class="form-check-label">
                                            Portable Ac
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="call pt-3">
                                    <a href="">
                                        <i class="fa fa-phone" aria-hidden="true"></i>Call Service Engineer for
                                        help</a>
                                    <div class="pt-2">
                                        <a href="{{('/service-repaire-home')}}"><b>Back</b></a>
                                        <button class="next-step float-right next-button">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Choose type>> See Rate Card -->
                        <div class="modal fade bd-example-modal-lg show-rate-card" id="ratecard" tabindex="-1"
                            role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle"><b>Rate Card</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body show-rate-card">
                                        <table class="table">

                                            <tbody>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet</td>
                                                    <td>Rs.345</td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet</td>
                                                    <td>Rs.345</td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet</td>
                                                    <td>Rs.345</td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet</td>
                                                    <td>Rs.345</td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet</td>
                                                    <td>Rs.345</td>
                                                </tr>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet</td>
                                                    <td>Rs.345</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //See Rate Card -->
                        <!--//end  Choose type of AC unit  (AC Service-2) -1step -->


                        <!-- step 1.1 Choose issues -->
                        <div class="tab-pane" role="tabpanel" id="step8">
                        <div class="rate" >
                                <h5>Choose issues</h5>
                
                                <div class="row pt-3">
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="AC not starting">
                                            <label class="form-check-label">
                                            AC not starting
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Less or no cooling">
                                            <label class="form-check-label">
                                            Less or no cooling
                                            </label>
                                        </div>
                                     </div>
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Water leakage">
                                            <label class="form-check-label">
                                            Water leakage
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Noise issue">
                                            <label class="form-check-label">
                                            Noise issue
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="issue-p">
                                <p>Repair cost shall be provided after inspection</p>
                                </div>
                                <div class="call pt-2">
                                    <a href="">
                                        <i class="fa fa-phone" aria-hidden="true"></i>Call Service Engineer for
                                        help</a>
                                    <div class="pt-2">
                                        <a href="{{('/service-repaire-home')}}"><b>Back</b></a>
                                        <button class="next-step float-right next-button">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Choose issues -->

                        <!-- Safety Precautions Agreement step 2(ac-service-4) -->
                        <div class="tab-pane" role="tabpanel" id="step2">
                            <div class="rate">
                                <h5>Safety Precautions Agreement</h5>
                                <div class="over">This text is really long and the height of its container is only 100
                                    pixels. Therefore, a scrollbar is added to help the reader to scroll the content.
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                    aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                                    vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis
                                    at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
                                    delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta
                                    nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer
                                    possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit
                                    eorum claritatem.</div>
                                <div class="form-check ml-4">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label">
                                        I agree to all the terms of agreement
                                    </label>
                                </div>
                                <div class="form-check ml-4">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label">
                                    I agree to diagnosis charges
                                    </label>
                                </div>
                                <div class="" style="margin: -13px 0 11px 0;">
                                    <button class="next-step float-right next-button">Next</button>
                                </div>
                            </div>
                        </div>
                        <!--// end  Safety Precautions Agreement step 2(ac-service-4) -->









                        <!-- Add Address form step-3 (ac-service-5) -->
                        <div class="tab-pane" role="tabpanel" id="step3">
                            <div class="add-address-box pb-4">
                                <h6><b>Add Address</b></h6>

                                <div class="form-row pt-3">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="pin"
                                            placeholder="Enter Your Pin Code*">
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
                                            <textarea class="form-control" id="" rows="3"
                                                placeholder="Address*"></textarea>
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
                                <div class="row mt-4">
                                    <div class="col-md-6 colr">
                                        <p>Find location on Google Maps</p>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="next-step float-right next-button">Next</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- //end Add Address form  step-3(ac-service-5) -->




                        <!-- Select date and time step-4 (ac-service-6) -->
                        <div class="tab-pane" role="tabpanel" id="step4">
                            <div class="add-address-box pb-4">
                                <h6><b>Select date and time</b></h6>

                                <div class="form-group col-6 mt-5">
                                    <input type="date" class="form-control" placeholder="date">
                                </div>
                                <div class="form-group col-6">
                                    <input type="time" class="form-control" placeholder="Another input">
                                </div>
                                <div style="height: 140px; padding: 111px 3px 0px 0;">
                                    <button class="next-step float-right next-button">Next</button>
                                </div>
                            </div>
                        </div>
                        <!--// end Select date and time step-4 (ac-service-6) -->



                        <!-- Verify your OTP step-5 ac-service-3 -->
                        <div class="tab-pane" role="tabpanel" id="step5">
                            <div class="add-address-box pb-4" style="width: 360px;">
                                <h6><b>Verify your OTP</b></h6>
                                <p>OTP sent to <a href="" style="color:black"> +91 9897979977</a></p>
                                <div class="form-group mt-2">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="form-group mt-5 ">
                                    <button class="next-step get-otp next-button">Get OTP</button>
                                </div>
                            </div>
                        </div>
                        <!-- end Verify your OTP step-5 ac-service-3 -->


                        <!-- Verify your OTP step-6 (ac-service-8) -->
                        <div class="tab-pane" role="tabpanel" id="step6">
                            <div class="add-address-box pb-4" style="width: 360px;">
                                <h6><b>Verify your OTP</b></h6>
                                <p>OTP sent to <a href="" style="color:black"> +91 9897979977</a></p>
                                <div class="form-group mt-2">
                                    <input type="text" class="form-control" placeholder="OTP">
                                </div>
                                <div class="text-center">0<span id="timer"></span></div>
                                <div class="form-group mt-2 ">
                                    <button class="next-step get-otp next-button">Verify</button>
                                </div>
                                <div class="text-center">
                                    <p>Didn’t receive OTP? <a href="" class="colr"> Resend</a> </p>
                                </div>
                            </div>
                        </div>
                        <!-- //end Verify your OTP step-6 (ac-service-8) -->

                        <!-- Payment Method step-7 -->
                        <div class="tab-pane" role="tabpanel" id="step7">
                            <div class="add-address-box">
                                <div class="payment-box">
                                    <h5><b>Payment Method</b></h5>
                                    <div class="text-right" style="margin-top: -34px;">
                                        <p>Payable account<br /><span><b>Rs.550</b></span></p>

                                    </div>
                                    <div class="container">
                                        <div class="panel-group" id="accordion" role="tablist"
                                            aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                            href="#creditcard" aria-expanded="true"
                                                            aria-controls="creditcard">
                                                            Credit Card
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="creditcard" class="panel-collapse collapse in" role="tabpanel"
                                                    aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Praesent nisl
                                                            lorem, dictum id pellentesque at, vestibulum ut arcu.
                                                            Curabitur erat
                                                            libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus
                                                            condimentum
                                                            laoreet lectus, blandit posuere tortor aliquam vitae.
                                                            Curabitur molestie
                                                            eros. </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                            data-parent="#accordion" href="#debitcard"
                                                            aria-expanded="false" aria-controls="debitcard">
                                                            Debit Card
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="debitcard" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Praesent nisl
                                                            lorem, dictum id pellentesque at, vestibulum ut arcu.
                                                            Curabitur erat
                                                            libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus
                                                            condimentum
                                                            laoreet lectus, blandit posuere tortor aliquam vitae.
                                                            Curabitur molestie
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Praesent nisl
                                                            lorem, dictum id pellentesque at, vestibulum ut arcu.
                                                            Curabitur erat
                                                            libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus
                                                            condimentum
                                                            laoreet lectus, blandit posuere tortor aliquam vitae.
                                                            Curabitur molestie
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
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Praesent nisl
                                                            lorem, dictum id pellentesque at, vestibulum ut arcu.
                                                            Curabitur erat
                                                            libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus
                                                            condimentum
                                                            laoreet lectus, blandit posuere tortor aliquam vitae.
                                                            Curabitur molestie
                                                            eros. </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingfive">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                            data-parent="#accordion" href="#Netbanking"
                                                            aria-expanded="false" aria-controls="Netbanking">
                                                            Netbanking
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="Netbanking" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingfive">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Praesent nisl
                                                            lorem, dictum id pellentesque at, vestibulum ut arcu.
                                                            Curabitur erat
                                                            libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus
                                                            condimentum
                                                            laoreet lectus, blandit posuere tortor aliquam vitae.
                                                            Curabitur molestie
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
                                                            Pay after Service
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="cash" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingsix">
                                                    <div class="panel-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Praesent nisl
                                                            lorem, dictum id pellentesque at, vestibulum ut arcu.
                                                            Curabitur erat
                                                            libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus
                                                            condimentum
                                                            laoreet lectus, blandit posuere tortor aliquam vitae.
                                                            Curabitur molestie
                                                            eros. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end  Payment Method step-7 -->












                    </div>
                </div>
            </div>
            @include('layouts.work-process-box')
        </div>
    </div>
    <!-- otp timer counter -->
    <script>
        document.getElementById('timer').innerHTML =
            004 + ":" + 20;
        startTimer();

        function startTimer() {
            var presentTime = document.getElementById('timer').innerHTML;
            var timeArray = presentTime.split(/[:]+/);
            var m = timeArray[0];
            var s = checkSecond((timeArray[1] - 1));
            if (s == 59) {
                m = m - 1
            }
            //if(m<0){alert('timer completed')}

            document.getElementById('timer').innerHTML =
                m + " : " + s;
            console.log(m)
            setTimeout(startTimer, 1000);
        }

        function checkSecond(sec) {
            if (sec < 10 && sec >= 0) {
                sec = "0" + sec
            }; // add zero in front of numbers < 10
            if (sec < 0) {
                sec = "59"
            };
            return sec;
        }

    </script>

</section>


@endsection
