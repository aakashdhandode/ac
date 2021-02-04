@extends('layouts.app')

@section('content')
<section>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm-6 p-5">
                <a href="{{('/')}}" style="color:black">
                    <div class="home-ac">
                        <img src="{!! asset('images/achome2.png') !!}" alt="" class="img-fluid">
                        <h3>Buy AC Units</h3>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 p-5">
                <a href="{{('/')}}" style="color:black">
                    <div class="home-ac">
                        <img src="{!! asset('images/homeac.png') !!}" class="img-fluid" alt="">
                        <h3>Get AC Service Repair</h3>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>
@endsection
