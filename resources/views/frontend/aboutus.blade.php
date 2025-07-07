@extends('layouts.frontend.master')

@section('content')
    <div class="main-hero-banner">
        <div class="banner_project_img ">
            <img class="bkg" src="{{ asset('frontend/image/ajira background.jpg') }}" alt="">
            <div class="banner-content">
                <div>
                    <h1 style="font-size: 60px;color:white">About Ajira Group</h1>
                </div>
                <p style="color:white;">Home/About Us</p>
            </div>
        </div>
    </div>
    <div class="container about-us-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-us-img">
                    <div class="square"></div>
                    <div>
                        <img src="{{ asset('frontend/image/gallery4.jpg') }}" alt="" class="aboutus_img">

                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <h5>About Us</h5>
                <h1 style="font-size: 50px">We Are a Dynamic <br /> Engineering Team.</h1>
                <p class="py-2">We offer our clients unparalleled services for engineering design and con <br /> struction
                    services. Experienced experts work with you to build your prefect home.</p>
            </div>
        </div>
    </div>

    <section class="py-5 colort">
        <div class="container">
            <div>
                <h3 style="color: #E56B0F ">Best Service</h3>
            </div>
            <div class="">
                <h1 class="">Services We Provide</h1>
            </div>
            <div class="py-2 mb-5">
                Partner with us to build your perfect home, might that be design only, design and build or design, build and
                sale.
            </div>


            <div class="row">
                <div class="col-lg-4">
                    <div class="swipper-container">
                        <div class="swip_icon mb-3">
                            <i class="ri-home-9-line remix_css home-icons"></i>
                        </div>
                        <p> Engineering Design services from con-<br/> ceptualization to drafting of your con-<br/> cepts for your
                            perfect home.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="swipper-container">
                        <div class="swip_icon mb-3">
                            <i class="ri-verified-badge-fill remix_css"></i>
                        </div>
                        <p> Engineering Supervision to make sure <br/> you get the best quality construction.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="swipper-container">
                        <div class="swip_icon mb-3">
                            <i class="ri-home-office-line remix_css "></i>
                        </div>
                        <p> Construction Service to provide you the <br/> best quality construction.</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- <div class="row">
            <div class="col-lg-4" style="background-color: rgb(255, 255, 255);border:10px gray;">
                <div class="py-5">
                    <div class="py-3"><i class="ri-group-line remix_css"></i></div>
                    <div class="py-3 head_textcss">
                       <a href="{{route('frontend.home')}}" class="professional_team"><h3>Professional Team</h3></a>
                    </div>
                    <p style="color: gray;">Our professional home experts answer
                        all queries with their unmatched
                        knowledge at every step during home
                        design and construction.</p>
                </div>
            </div>
            <div class="col-lg-4" style="background-color: rgb(255, 255, 255);border:10px gray;">
                <div class="py-5">
                    <div class="py-3"><i class="ri-money-dollar-box-line remix_css"></i></div>
                    <div class="py-3 head_textcss">
                        <a href="{{route('frontend.home')}}" class="professional_team"><h3>Trasparent Pricing</h3></a>
                    </div>
                    <p class="textcolor">We offer our clients unmatched price with
                        <span style="color:rgb(98, 98, 98);font-weight: 700;">no hidden costs.</span> Our pricing is
                        transparent
                        at every stage; You can be confident that you get what you are paying for!
                    </p>
                </div>
            </div>
            <div class="col-lg-4" style="background-color: rgb(255, 255, 255);border:10px gray;">
                <div class="py-5">
                    <div class="py-3"><i class="ri-building-4-line remix_css"></i></div>
                    <div class="py-3 head_textcss">
                        <a href="{{route('frontend.home')}}" class="professional_team"><h3>Unparalleled <br /> Experience</h3></a>                        </div>
                    <p style="color: gray;">Experience the exceptional project
                        management with real-time project monitoring and progress tracking.</p>
                </div>
            </div>

            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">

            </div>
        </div> --}}
    </section>
@endsection
