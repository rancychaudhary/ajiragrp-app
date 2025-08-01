@extends('layouts.frontend.master')

@section('content')
    <div class="main-hero-banner">
        <div class="banner_project_img ">
            <img class="bkg" src="{{ asset('frontend/image/backgroundimg.jpg') }}" alt="">
            <div class="banner-content">
                <div>
                    <h1 style="font-size: 60px;color:white;font-weight:50px">Blog</h1>
                </div>
                <p style="color:white;">Home/Blog</p>
            </div>
        </div>
    </div>

    <div class="swipper_mov_container">

        <div class="container">

            <div class="py-1">
                <p style="font-size: 20px">Popular Post</p>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide  ">
                        <div class="card_block">
                            <div class="card-image">
                                <img src="{{asset('frontend/image/blogimage4.jpg')}}" alt="">
                              </div>
                              <div class="px-3">
                                <h5>Building Approval<br/>and Registration <br/> process </h5>
                                <p style="color:#858585;">september 17 2022</p>
                              </div>
                        </div>
                    </div>
                    <div class="swiper-slide  ">
                        <div class="card_block">
                            <div class="card-image">
                                <img src="{{asset('frontend/image/blogimage5.jpg')}}" alt="">
                              </div>
                              <div class="px-3">
                                <h5>Why choose us? </h5>
                                <p style="color:#858585;">june 16 2022</p>
                              </div>
                        </div>
                    </div>
                    <div class="swiper-slide  ">
                        <div class="card_block">
                            <div class="card-image">
                                <img src="{{asset('frontend/image/blogimage1.jpg')}}" alt="">
                              </div>
                              <div class="px-3">
                                <h5>4 aana house<br/>design</h5>
                                <p style="color:#858585;">September 08 2022</p>
                              </div>
                        </div>
                    </div>
                    <div class="swiper-slide  ">
                        <div class="card_block">
                            <div class="card-image">
                                <img src="{{asset('frontend/image/blogimage2.jpg')}}" alt="">
                              </div>
                              <div class="px-3">
                                <h5>Residence<br/>Construction Cost <br/> in Nepal </h5>
                                <p style="color:#858585;">March 23 2022</p>
                              </div>
                        </div>
                    </div>
                    <div class="swiper-slide  ">
                        <div class="card_block">
                            <div class="card-image">
                                <img src="{{asset('frontend/image/blogimage3.jpg')}}" alt="">
                              </div>
                              <div class="px-3">
                                <h5>Ghar Ko Design in<br/>Nepal(latest<br/> Update 2023) </h5>
                                <p style="color:#858585;">November 07 2022</p>
                              </div>
                        </div>
                    </div>
                    <div class="swiper-slide  ">
                        <div class="card_block">
                            <div class="card-image">
                                <img src="{{asset('frontend/image/blogimage4.jpg')}}" alt="">
                              </div>
                              <div class="px-3">
                                <h5>Building Approval<br/>and Registration <br/> process </h5>
                                <p style="color:#858585;">september 17 2022</p>
                              </div>
                        </div>
                    </div>
                    <div class="swiper-slide  ">
                        <div class="card_block">
                            <div class="card-image">
                                <img src="{{asset('frontend/image/blogimage5.jpg')}}" alt="">
                              </div>
                              <div class="px-3">
                                <h5>Why choose us? </h5>
                                <p style="color:#858585;">june 16 2022</p>
                              </div>
                        </div>
                    </div>
                    {{-- <div class="swiper-slide  ">
                        <div class="card_block">
                            <div class="card-image">
                                <img src="{{asset('frontend/image/blogimage6.jpg')}}" alt="">
                              </div>
                              <div class="px-3">
                                <h5>Building Approval<br/>and Registration <br/> process </h5>
                                <p style="color:#858585;">september 17 2022</p>
                              </div>
                        </div>
                    </div>
                    <div class="swiper-slide  ">
                        <div class="card_block">
                            <div class="card-image">
                                <img src="{{asset('frontend/image/blogimage7.jpg')}}" alt="">
                              </div>
                              <div class="px-3">
                                <h5>Building Approval<br/>and Registration <br/> process </h5>
                                <p style="color:#858585;">september 17 2022</p>
                              </div>
                        </div>
                    </div> --}}

                </div>
            </div>

        </div>

    </div>

    {{-- <div class="container">
        <div class="py-2">
            <h4>Popular Post</h4>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide  ">
                    <div class="card_block">
                        <div class="card-image">
                            <img src="{{asset('frontend/image/5th building.jpg')}}" alt="">
                          </div>
                          <div class="px-3">
                            <h5>Building Approval<br/>and Registration <br/> process </h5>
                            <p style="color:#858585;">september 17 2022</p>
                          </div>
                    </div>
                </div>

                <div class="swiper-slide  ">
                    <div class="card_block">
                        <div class="card-image">
                            <img src="{{asset('frontend/image/5th building.jpg')}}" alt="">
                          </div>
                          <div class="px-3">
                            <h5>Building Approval<br/>and Registration <br/> process </h5>
                            <p style="color:#858585;">september 17 2022</p>
                          </div>
                    </div>
                </div>

                <div class="swiper-slide  ">
                    <div class="card_block">
                        <div class="card-image">
                            <img src="{{asset('frontend/image/5th building.jpg')}}" alt="">
                          </div>
                          <div class="px-3">
                            <h5>Building Approval<br/>and Registration <br/> process </h5>
                            <p style="color:#858585;">september 17 2022</p>
                          </div>
                    </div>
                </div>

                <div class="swiper-slide  ">
                    <div class="card_block">
                        <div class="card-image">
                            <img src="{{asset('frontend/image/5th building.jpg')}}" alt="">
                          </div>
                          <div class="px-3">
                            <h5>Building Approval<br/>and Registration <br/> process </h5>
                            <p style="color:#858585;">september 17 2022</p>
                          </div>
                    </div>
                </div>
                <div class="swiper-slide  ">
                    <div class="card_block">
                        <div class="card-image">
                            <img src="{{asset('frontend/image/5th building.jpg')}}" alt="">
                          </div>
                          <div class="px-3">
                            <h5>Building Approval<br/>and Registration <br/> process </h5>
                            <p style="color:#858585;">september 17 2022</p>
                          </div>
                    </div>
                </div>
                <div class="swiper-slide  ">
                    <div class="card_block">
                        <div class="card-image">
                            <img src="{{asset('frontend/image/5th building.jpg')}}" alt="">
                          </div>
                          <div class="px-3">
                            <h5>Building Approval<br/>and Registration <br/> process </h5>
                            <p style="color:#858585;">september 17 2022</p>
                          </div>
                    </div>
                </div>
                <div class="swiper-slide  ">
                    <div class="card_block">
                        <div class="card-image">
                            <img src="{{asset('frontend/image/5th building.jpg')}}" alt="">
                          </div>
                          <div class="px-3">
                            <h5>Building Approval<br/>and Registration <br/> process </h5>
                            <p style="color:#858585;">september 17 2022</p>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 2500,
            }
        });
    </script>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box_1">
                        <div class="ban_image1"><img
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/box1.jpg') }}" alt="pic"></div>
                        <div>
                            <h3 class="px-4 py-2 property_hov">Vastu Tips for House Construction 2023</h3>
                        </div>
                        <p class="px-4 textcl line-clamp-2">In this blog “Vastu Tips for House Construction” we
                            will explore the fundamental principles and
                            guidelines of Vastu Shastra that can help you crea…
                        </p>
                        <div class="readmorebut">
                            <a href="{{ route('frontend.showpage') }}">
                                <button class="but_ccs">Read More
                                    <i class="ri-add-line px-2"></i>
                                </button>
                            </a>
                        </div>
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
                        <p class="px-4 textcl line-clamp-2">Hiring a home builder in Nepal? If you’re planning to build your
                            dream home
                            in Nepal, you’re embarking on an exciting journey. Nepal’s unique landscap…
                        </p>
                        <div class="readmorebut">
                            <a href="{{ route('frontend.showpage') }}">
                                <button class="but_ccs">Read More
                                    <i class="ri-add-line px-2"></i>
                                </button>
                            </a>
                        </div>
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
                        <p class="px-4 textcl line-clamp-2">Nepal, a country nestled in the Himalayas, is experiencing rapid
                            urbanization and economic growth. This surge has led to an increased demand for comme…
                        </p>
                        <div class="readmorebut">
                            <a href="{{ route('frontend.showpage') }}">
                                <button class="but_ccs">Read More
                                    <i class="ri-add-line px-2"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box_1">
                        <div class="ban_image1"><img
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/blogimage1.jpg') }}" alt="pic"></div>
                        <div>
                            <h3 class="px-4 py-2 property_hov">What Are the Top Qualities to Look for in Home Builder?</h3>
                        </div>
                        <p class="px-4 textcl line-clamp-2">Building a home is a significant investment and a dream for
                            many people. It is a journey that requires careful planning, attention to detail, and the …
                        </p>
                        <div class="readmorebut">
                            <a href="{{ route('frontend.showpage') }}">
                                <button class="but_ccs">Read More
                                    <i class="ri-add-line px-2"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box_1">
                        <div class="ban_image1"><img
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/blogimage2.jpg') }}" alt="pic"></div>
                        <div>
                            <h3 class="px-4 py-2 property_hov">नेपालमा घर बनाउन किन महंगो <br />यस्ता छन् पाँच कारणहरू</h3>
                        </div>
                        <p class="px-4 textcl line-clamp-2">
                            विशाल बंगला होस् वा झुपडी, हरेक मान्छेलाई घर अनिवार्य चा�…
                        </p>
                        <div class="readmorebut">
                            <a href="{{ route('frontend.showpage') }}">
                                <button class="but_ccs">Read More
                                    <i class="ri-add-line px-2"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box_1">
                        <div class="ban_image1"><img
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/blogimage3.jpg') }}" alt="pic"></div>
                        <div>
                            <h3 class="px-4 py-2 property_hov">Land Measurement in Nepal: A Comprehensive Guide</h3>
                        </div>
                        <p class="px-4 textcl line-clamp-2">Introduction: Land measurement is the process of
                            determining the size, boundaries, and ownership of a piece of land.
                            It is an important aspect of land…
                        </p>
                        <div class="readmorebut">
                            <a href="{{ route('frontend.showpage') }}">
                                <button class="but_ccs">Read More
                                    <i class="ri-add-line px-2"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box_1">
                        <div class="ban_image1"><img
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/blogimage4.jpg') }}" alt="pic"></div>
                        <div>
                            <h3 class="px-4 py-2 property_hov">Low-Cost House Design In Nepal – Perfect for Building a Home
                            </h3>
                        </div>
                        <p class="px-4 textcl line-clamp-2">Are you looking for a low-cost house design in Nepal to build
                            your home on
                            a budget? If so, you have come to the right place. In this blog post, we wi…
                        </p>
                        <div class="readmorebut">
                            <a href="{{ route('frontend.showpage') }}">
                                <button class="but_ccs">Read More
                                    <i class="ri-add-line px-2"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box_1">
                        <div class="ban_image1"><img
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/blogimage5.jpg') }}" alt="pic"></div>
                        <div>
                            <h3 class="px-4 py-2 property_hov">Latest Ghar Design Trends and Ideas (2023)</h3>
                        </div>
                        <p class="px-4 textcl line-clamp-2">Are you looking for some of the latest trends and innovative
                            ideas in
                            Ghar Design? If so, you’ve come to the right place! In this blog post, we’ll be …
                        </p>
                        <div class="readmorebut">
                            <a href="{{ route('frontend.showpage') }}">
                                <button class="but_ccs">Read More
                                    <i class="ri-add-line px-2"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box_1">
                        <div class="ban_image1"><img
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/blogimage6.jpg') }}" alt="pic"></div>
                        <div>
                            <h3 class="px-4 py-2 property_hov">Do Architects Build or Design?</h3>
                        </div>
                        <p class="px-4 textcl line-clamp-2">Do architects build or design? This is a question that many
                            people have when it comes to the profession of architecture. Years of study, a license fro…
                        </p>
                        <div class="readmorebut">
                            <a href="{{ route('frontend.showpage') }}">
                                <button class="but_ccs">Read More
                                    <i class="ri-add-line px-2"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box_1">
                        <div class="ban_image1"><img
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/blogimage7.jpg') }}" alt="pic"></div>
                        <div>
                            <h3 class="px-4 py-2 property_hov">How Much Do You Know About Buying Land In Nepal?</h3>
                        </div>
                        <p class="px-4 textcl line-clamp-2">Buying Land in Nepal is regarded as the Largest investment a
                            lot of people ever make in the land. Do you Know? real estate in Nepal is on the ri…
                        </p>
                        <div class="readmorebut">
                            <a href="{{ route('frontend.showpage') }}">
                                <button class="but_ccs">Read More
                                    <i class="ri-add-line px-2"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box_1">
                        <div class="ban_image1"><img
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/blogimage8.jpg') }}" alt="pic"></div>
                        <div>
                            <h3 class="px-4 py-2 property_hov">6 ways to reduce construction costs</h3>
                        </div>
                        <p class="px-4 textcl line-clamp-2">Everyone desires to build their ideal home. Everyone
                            wishes to construct a home in which to keep their memories. However, making one’s dream a
                            reality…
                        </p>
                        <div class="readmorebut">
                            <a href="{{ route('frontend.showpage') }}">
                                <button class="but_ccs">Read More
                                    <i class="ri-add-line px-2"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box_1">
                        <div class="ban_image1"><img
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image//blogimage9.jpg') }}" alt="pic"></div>
                        <div>
                            <h3 class="px-4 py-2 property_hov">Home interior design in Nepal-An explanation</h3>
                        </div>
                        <p class="px-4 textcl line-clamp-2">Home interior design in Nepal is a fascinating and
                            complex subject. From traditional Nepalese styles to modern, contemporary
                            designs, the options are …
                        </p>
                        <div class="readmorebut">
                            <a href="{{ route('frontend.showpage') }}">
                                <button class="but_ccs">Read More
                                    <i class="ri-add-line px-2"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
