@extends('layouts.frontend.master')

@section('content')
    <div class="main-hero-banner">
        <div class="banner_project_img ">
            <img class="bkg" src="{{ asset('frontend/image/backgroundimg.jpg') }}" alt="">
            <div class="banner-content">
                <div>
                    <h1 style="font-size: 60px;color:white">Contact Us</h1>
                </div>
                <p style="color:white;">Home/Contact Us</p>
            </div>
        </div>

    </div>

    <div style="padding-top: 5rem;" class="container">
        {{-- <div class="relative_div">
        <img style="height:100vh;width:100%;" src="{{ asset('frontend/image/ajira background.jpg') }}" alt="pic">
        <div class="absolute_div">
            <div style="font-size:50px;color: white;font-weight:500;">Contact Us</div>
            <p style="color: white;">Home/Contact Us</p>
        </div>
    </div> --}}
        <div class="row" style="padding: 0%;margin:0%">
            <div class="col-lg-6 location_div py-1">
                <iframe style="height: 450px;" class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d451115.9902201079!2d84.38106212677862!3d27.952759225951755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19048e8bd5f3%3A0x3c741aa34f334320!2sAjira%20Group!5e0!3m2!1sen!2snp!4v1661793883959!5m2!1sen!2snp"
                    style="border:0;" allowfullscreen=""></iframe>
            </div>

            <div class="col-lg-6">
                <div class="" style="color: gray">
                    [gravityform id=1 title=false description=false </br> ajax=true tabindex=49]
                </div>
            </div>
        </div>

        <section class="contact_container">
            <div class="row">
                <div class="col-lg-4">
                    <div>
                        <div><i class="ri-phone-fill call_us"> <span
                                    style="color:gray;font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Call
                                    Us:</span></i></div>
                        <div style="font-weight:500;font-size:22px;" class="py-1">+977-01-47 97 022</div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div>
                        <div><i class="ri-mail-line call_us"><span
                                    style="color:gray;font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                                    Have any Question?</span></i></div>
                        <div style=" font-weight:500;font-size:23px;" class="py-1">support@ajiragroup.com</div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div>
                        <div><i class="ri-phone-fill call_us"> <span
                                    style="color:gray;font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Address</span></i>
                        </div>
                        <div style=" font-weight:500;font-size:23px;" class="py-1">New Baneshwor, Kathmandu</div>
                    </div>
                </div>
            </div>
        </section style="padding-bottom:20px;">
    </div>
@endsection
