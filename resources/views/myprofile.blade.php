@extends('layouts.app')
@section('content')
<style>
    .booking-price h5 {
        float: right;
        margin: -30px 0 25px 0;
        font-weight: 600;
    }
    }

    .booking-title {
        float: right;
        margin: -30px 0 25px 0;
        font-weight: 600;
    }

</style>



<div class="container mt-5">
    <div class="top-page-links">
        <a href="">Home / My Account </a>
    </div>
    <div class="row">

        <div class="col-md-2 mb-3 profile">
            <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#myprofile" role="tab"
                        aria-controls="v-pills-home" aria-selected="true">My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#myorders" role="tab"
                        aria-controls="v-pills-profile" aria-selected="false">My Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#mybooking" role="tab"
                        aria-controls="v-pills-profile" aria-selected="false">My Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#changepwd" role="tab"
                        aria-controls="contact" aria-selected="false">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#myaddress" role="tab"
                        aria-controls="contact" aria-selected="false">My Address</a>
                </li>
            </ul>
        </div>


        <div class="col-md-10 vertical-line pl-4">
            <div class="tab-content" id="myTabContent">
                <!-- my profile -->
                <div class="tab-pane fade show active col-md-4" id="myprofile" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                    <h4>My Profile</h4>
                    <form class="mt-4">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="email" class="form-control" name="" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="email" class="form-control" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" placeholder="City">
                        </div>

                        <button type="submit" class="btn button-color mt-4">Save Changes</button>
                    </form>
                </div>

                <!-- my orders -->

                <div class="tab-pane fade col-md-9" id="myorders" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <h4>My Orders</h4>
                    <div class="mt-4 row booking_box">
                        <div class="col-md-4 pro-img">
                            <img src="http://www.pngall.com/wp-content/uploads/2/Split-Air-Conditioner-Transparent.png"
                                class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="booking_box_title">
                                <p class="col-8 ">Voltas Adjustable<br/> Inverter Split Ac 185v Ads(R32)</p>
                                <span class="">Rs.63,333</span>        
                            </div>

                            <table style="width:100%">
                                <tr>
                                    <td class="title-color">Type</td>
                                    <td>Invertor AC Unit</td>
                                </tr>
                                <tr>
                                    <td class="title-color">Tonnage</td>
                                    <td>Tonnage</td>
                                </tr>
                                <tr>
                                    <td class="title-color">Quantity</td>
                                    <td>1</td>
                                </tr>
                            </table>
                            <div class="reschedule title-color" style="float: right; margin: -19px 0 0 0;">
                                <p>Delivered on 23/11/2020</p>
                            </div>

                        </div>
                    </div>

                </div>


                <!-- my booking -->
                <div class="tab-pane fade col-md-9" id="mybooking" role="tabpanel"
                    aria-labelledby="v-pills-profile-tab">
                    <h4>My Bookings</h4>
                    <div class="mt-4 row booking_box">
                        <div class="col-md-4 pro-img">
                            <img src="http://www.pngall.com/wp-content/uploads/2/Split-Air-Conditioner-Transparent.png"
                                class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="booking_box_title">
                                <p class="col-8 ">AC Repair</p>
                                <span class="">Rs.333</span>        
                            </div>
                            <table style="width:100%">
                                <tr>
                                    <td class="title-color">Type</td>
                                    <td>WINDOW AC</td>
                                </tr>
                                <tr>
                                    <td class="title-color">Issue</td>
                                    <td>AC not starting</td>
                                </tr>
                                <tr>
                                    <td class="title-color">Slot</td>
                                    <td>23/11/2020</td>
                                </tr>
                                <tr>
                                    <td class="title-color">Quantity</td>
                                    <td>1</td>
                                </tr>
                            </table>
                            <div class="reschedule mt-2">
                                <a href="">Cancel the booking</a>
                                <a href="" class="float-right">Reschedule the Slot</a>
                            </div>

                        </div>
                    </div>
                    <div class="mt-4 row booking_box">
                        <div class="col-md-4 pro-img">
                            <img src="http://www.pngall.com/wp-content/uploads/2/Split-Air-Conditioner-Transparent.png"
                                class="img-fluid">
                        </div>
                        <div class="col-md-8">
                        <div class="booking_box_title">
                                <p class="col-8 ">AC Repair</p>
                                <span class="">Rs.333</span>        
                            </div>
                            <table style="width:100%">
                                <tr>
                                    <td class="title-color">Type</td>
                                    <td>WINDOW AC</td>
                                </tr>
                                <tr>
                                    <td class="title-color">Issue</td>
                                    <td>AC not starting</td>
                                </tr>
                                <tr>
                                    <td class="title-color">Slot</td>
                                    <td>23/11/2020</td>
                                </tr>
                                <tr>
                                    <td class="title-color">Quantity</td>
                                    <td>1</td>
                                </tr>
                            </table>
                            <div class="mt-2">
                                <p class="title-color">Service done on <span>23/11/2020</span> </p>

                            </div>

                        </div>
                    </div>
                </div>





                <!-- change password -->
                <div class="tab-pane fade col-md-4" id="changepwd" role="tabpanel" aria-labelledby="contact-tab">
                    <h4>Change Password</h4>
                    <form class="mt-5">
                        <div class="form-group">
                            <label>Old Password</label>
                            <input type="password" class="form-control" name="" placeholder="****************">

                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="" placeholder="New Password">
                        </div>
                        <button type="submit" class="btn button-color mt-4">Change Password</button>
                    </form>
                </div>

                <!-- My Address -->
                <div class="tab-pane fade" id="myaddress" role="tabpanel" aria-labelledby="contact-tab">
                    <h4>My Address</h4>
                    <div class="row mt-5">
                        <div class="col-sm-4">
                            <div class="location-box">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h5>Home</h5>
                                <p>118, Qutub Vihar, New<br /> Delhi 10007,<br /> India</p>
                                <a href="" style="float:right" class="clr"><b>Edit Location</b></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="location-box">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h5>Home</h5>
                                <p>118, Qutub Vihar, New<br /> Delhi 10007,<br /> India</p>
                                <a href="" style="float:right" class="clr"><b>Edit Location</b></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="location-add">
                                <a href="" class="clr" data-toggle="modal" data-target=".bd-example-modal-lg"><i
                                        class="fa fa-plus" aria-hidden="true"></i>
                                    <h4> Add Location </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" style="top: -51px;" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="border:none; padding: 10px 7px 0px 27px;">
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Enter Address</b></h5>
                                    <button type="button" class="close" style="color: black;" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="Example input">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="Another input">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="Another input">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="Another input">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="Another input">
                                                    </div>

                                                    <div class="btn-toolbar tree-button" role="toolbar"
                                                        aria-label="Toolbar with button groups">
                                                        <div class="btn-group mr-2" role="group"
                                                            aria-label="First group">
                                                            <button type="button"
                                                                class="btn btn-secondary">Home</button>
                                                        </div>
                                                        <div class="btn-group mr-2" role="group"
                                                            aria-label="Second group">
                                                            <button type="button"
                                                                class="btn btn-secondary">Office</button>
                                                        </div>
                                                        <div class="btn-group" role="group" aria-label="Third group">
                                                            <button type="button"
                                                                class="btn btn-secondary">Other</button>
                                                        </div>
                                                    </div>
                                                    <div class="text-center location-submit" role="group" aria-label="">
                                                        <button type="button" class="btn btn-secondary">Add new
                                                            location</button>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="col-md-7">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3810.74823051506!2d79.03443641487415!3d17.23099888817244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTfCsDEzJzUxLjYiTiA3OcKwMDInMTEuOSJF!5e0!3m2!1sen!2sin!4v1609765574406!5m2!1sen!2sin"
                                                    width="100%" height="350" frameborder="0" style="border:0;"
                                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>

<div class="text-center col-12" style="margin: 200px 0 0 0;">
                    <p>Copyright © 2020. All rights reserved. | Designed & Developed by <a href="https://odms.in/"
                            target="_blank">ODMS PVT LTD</a></p>
                </div>






@endsection
