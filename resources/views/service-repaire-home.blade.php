@extends('layouts.app')
@section('content')

<section>
    <div class="container top-margin">
        <div class="row">
            <div class='col-md-7'>
                <h5 class="pb-4"><b>Payment Method</b></h5>
                <div class="ac-service-repair-box">
                    <a href="{{('/ac-service')}}">
                        <h5>AC Service</h5>
                        <p>Full cleaning and diagnosis</p>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="ac-service-repair-box">
                    <a href="{{('/ac-repaire')}}">
                        <h5>AC Repair</h5>
                        <p>AC not starting / less or no cooling / water leakage</p>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="ac-service-repair-box">
                    <a href="{{('/installation')}}">
                        <h5>Installation/Un-installation</h5>
                        <p>For all types of AC units</p>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <!-- order summery -->
            <div class="side-box">
            @include('layouts.work-process-box')</div>
        </div>
</section>


@endsection
