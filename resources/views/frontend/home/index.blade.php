@extends('layouts.frontend.master')

@section('content')
    <div>
        <img class="bkg" src="{{asset('frontend/image/background img.jpg')}}" alt="">
    </div>
    <div class="banner-container">
        <div class="inner_container">
            <h6 style="color: gray;padding-left: 5px;">Design and Build with the </h6>
            <h1 style="font-size:48px;">Best construction company in</h1>
            <h1 style="font-size: 48px;">Kathmandu, Nepal</h1>
            <a href="{{route('frontend.contactus')}}"><button class="btn_2">GET APPOINTMENT</button></a>
        </div>
    </div>
    <section class="py-5">
        <div class="container head_container">
            <div style="align-items: cetner; justify-content: center;">
                <h1 class="text-center">Featured Projects</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="parentdiv">
                        <div class="image_box_1">
                            <img class="banglo_image" src="{{ asset('frontend/image/bangloimage.jpg') }}"
                                alt="image">
                        </div>
                        <div class="card-content">
                            <h6><i class="ri-user-fill people_logo"></i>Ajira Builders </h6>
                               <h3 style="color: white;font-weight:50px" class="fusion_heading"> Neo-Fusion Bungalow at Tokha </h3>
                                <P>A premium modernized neo-classical bungalow design with an aim to<br/> highlight building design. Home De…</P>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="text">
                        <div class="image_box_2">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/ajira background.jpg') }}" alt="image">
                        </div>
                        <div class="di">Commercial Building Thimi</div>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="text_2" style="overflow:hidden">
                        <div class="image_box_2">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/3rd building.jpg') }}" alt="image">
                        </div>
                        <div class="vi">A Welcoming Haven: Your Comfy Modern 3.5-Story Residence in Sunakothi, Lalitpur
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- </div>
          </div>
        </div> -->
    </section>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-3">
                    <div class="text_3" style="overflow:hidden">
                        <div class="image_box_2">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/4th building.jpg') }}" alt="hi">
                        </div>
                        <div class="ti">Residence at Kalanki</div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="text_4" style="overflow:hidden">
                        <div class="image_box_2">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/5th building.jpg') }}" alt="pi" srcset="">
                        </div>
                        <div class="gi">Bungalow Building</div>
                    </div>
                </div>

                {{-- <div class="col-lg-4">
                    <div class="text_5" style="overflow:hidden">
                        <div class="image_box_2">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="./Ajira group_image/5th building.jpg" alt="pi" srcset="">
                        </div>
                        <div class="si">Premium Bungalow</div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="four_pic6">
                        <img class="four_ig" src="{{ asset('frontend/image/6th banglo.jpg') }}" alt="piic">
                    </div>
                </div>
                <div class="col-lg-6 relative_icon">
                    <div class="four_pic7">
                        <h1>Build your home with us in <br /> 3 steps</h1>
                    </div>
                    <div>
                        <p style="color: gray;">Now you can build your dream home in three simple steps with Ajira
                            <br />Builders.</p>
                    </div>

                    <div class="d-flex gap-3">
                        <div class="py-3"><i class="ri-home-8-line homeicon"></i></div>
                        <div>
                            <div>
                                <h4 style="">Get the best design for your home</h4>
                            </div>
                            <p style="color: gray;" class="home_relative">Consult with the best Architects team at Ajira
                                Builders to get the <br /> perfect plan for your home.</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <div class="py-3 pl-5"><i class="ri-home-8-line home2"></i></div>
                        <div>
                            <div>
                                <h4 style="">Get Quote</h4>
                            </div>
                            <p style="color: gray;">Get a competitive rates for construction of your home.</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <div class="py-3"><i class="ri-home-8-line home3"></i></div>
                        <div>
                            <div>
                                <h4 style="">Sit back and relax</h4>
                            </div>
                            <p style="color: gray;">Sit back and relax while our team of experts deal
                                with all con <br />struction works until we handover your ready to move in house.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="container single_container">
            <div class="py-4">
                <h1 class="">Popular Projects</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 py-3">
                    <div class="text_6" style="overflow:hidden">
                        <div class="image_box_2">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/ajira background.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Commercial Building Thimi</div>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="text_7" style="overflow:hidden">
                        <div class="image_box_2">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/bangloimage.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Neo-Fusion Bungalow at Tokha</div>
                    </div>
                </div>

                <div class="col-lg-3 py-3">
                    <div class="text_8" style="overflow:hidden">
                        <div class="image_box_2">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/4th building.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Residence at Kalanki
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 py-3">
                    <div class="text_9" style="overflow:hidden">
                        <div class="image_box_2">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/7th building.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Simple Home Design</div>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 py-3">
                    <div class="text_10" style="overflow:hidden">
                        <div class="image_box_11">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/building1.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Commercial Building Balkot</div>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="text_11" style="overflow:hidden">
                        <div class="image_box_11">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/building2.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Bungalow at Swayambhu</div>
                    </div>
                </div>

                <div class="col-lg-3 py-3">
                    <div class="text_12" style="overflow:hidden">
                        <div class="image_box_11">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/building3.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Contemporary Excellence: A Modern 2.5-Story Residence in Saibu, Lalitpur
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 py-3">
                    <div class="text_13" style="overflow:hidden">
                        <div class="image_box_11">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/building4.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Residence at Chabahil</div>
                    </div>
                </div>
            </div>
    </section>

    <section class="py-5 colort">
        <div class="container">
            <div class="py-5">
                <h1 class="text-center">Why Choose Us</h1>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="px-5">
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
                <div class="col-lg-4">
                    <div class="px-5">
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
                <div class="col-lg-4">
                    <div class="px-5">
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
            </div>

        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="d-flex py-5">
                <h1>Recent News</h1>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="box_1">
                        <div class="ban_image1"><img
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/box1.jpg') }}" alt="pic"></div>
                        <div>
                            <h3 class="px-4 py-2 property_hov">Vastu Tips for House Construction 2023</h3>
                        </div>
                        <p class="px-4 textcl">In this blog “Vastu Tips for House Construction” we
                            will explore the fundamental principles and
                            guidelines of Vastu Shastra that can help you crea…
                        </p>
                        <div class="btn-box"><button class="but_ccs ">Read More +</button></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box_1">
                        <div class="ban_image1"><img
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/box2.jpg') }}" alt="pic"></div>
                        <div>
                            <h3 class="px-4 py-2 property_hov">Hiring a Home Builder in <br />Nepal Guide</h3>
                        </div>
                        <p class="px-4 textcl">Hiring a home builder in Nepal? If you’re planning to build your dream home
                            in Nepal, you’re embarking on an exciting journey. Nepal’s unique landscap…
                        </p>
                        <div><button class="but_ccs">Read More +</button></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box_1">
                        <div class="ban_image1"><img
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/box3.jpg') }}" alt="pic"></div>
                        <div>
                            <h3 class="px-4 py-2 property_hov">Commercial Building <br /> Process in Nepal</h3>
                        </div>
                        <p class="px-4 textcl">Nepal, a country nestled in the Himalayas, is experiencing rapid
                            urbanization and economic growth. This surge has led to an increased demand for comme…
                        </p>
                        <div><button class="but_ccs">Read More +</button></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="py-5">
                <h1 class="text-center">Our Partner</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 coverimg">
                    <div class="ban_image"><img style="height: 200px;width: 100%;object-fit: cover;"
                            src="{{ asset('frontend/image/banner1.png') }}" alt="pi"></div>
                </div>
                <div class="col-lg-3">
                    <div class="ban_image"><img style="height: 200px;width: 100%;object-fit: cover;"
                            src="{{ asset('frontend/image/banner2.png') }}" alt="pi"></div>
                </div>
                <div class="col-lg-3">
                    <div class="ban_image"><img style="height: 200px;width: 100%;object-fit: cover;"
                            src="{{ asset('frontend/image/banner3.png') }}" alt="pi"></div>
                </div>
                <div class="col-lg-3">
                    <div class="ban_image"><img style="height: 200px;width: 100%;object-fit: cover;"
                            src="{{ asset('frontend/image/banner4.png') }}" alt="pi"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
