@extends('layouts.frontend.master')

@section('content')
    <div class="main-hero-banner">
        <div class="banner_project_img ">
            <img class="bkg" src="{{ asset('frontend/image/background img.jpg') }}" alt="">

            <div class="banner-content">
                <div>
                    <h1 style="font-size: 60px;color:white">Projects</h1>
                </div>
                <p style="color:white;">Home/Projects</p>
            </div>
        </div>
    </div>
    {{-- <div class="swiper mySwiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide"><img src="
            {{asset('frontend/image/3rd building.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="
            {{asset('frontend/image/3rd building.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="
            {{asset('frontend/image/3rd building.jpg')}}" alt=""></div>
          <div class="swiper-slide"><img src="
            {{asset('frontend/image/3rd building.jpg')}}" alt=""></div>
          <div class="swiper-slide">Slide 5</div>
          <div class="swiper-slide">Slide 6</div>
          <div class="swiper-slide">Slide 7</div>
          <div class="swiper-slide">Slide 8</div>
          <div class="swiper-slide">Slide 9</div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 3,
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          autoplay:{
            delay:2000,
          }
        });
      </script> --}}

    <section>
        <div style="padding-top: 5rem;" class="container single_container">
            <!-- <div class="py-4">
                <h1 class="">Popular Projects</h1>
            </div> -->
            <div class="row">
                <div class="col-lg-3 py-3">
                    <div class="text_6" style="overflow:hidden">
                        <div class="image_box_7">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/3rd building.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">A Welcoming Haven: Your Comfy Modern 3.5-Story Residence in Sunakothi, Lalitpur
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="text_7" style="overflow:hidden">
                        <div class="image_box_8">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/projects_1st_house.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Spacious Multi-Story Residence in Shantinagar, Kathmandu: Your Dream Home Awaits
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 py-3">
                    <div class="text_8" style="overflow:hidden">
                        <div class="image_box_9">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/building3.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Contemporary Excellence: A Modern 2.5-Story Residence in Saibu, Lalitpur
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 py-3">
                    <div class="text_9" style="overflow:hidden">
                        <div class="image_box_10">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/building4.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Residence at Chabahil</div>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div style="padding-top: 5rem;" class="container single_container">
            <!-- <div class="py-4">
                <h1 class="">Popular Projects</h1>
            </div> -->
            <div class="row">
                <div class="col-lg-3 py-3">
                    <div class="text_6" style="overflow:hidden">
                        <div class="image_box_7">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/bangloimage.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Neo-Fusion Bungalow at <br> Tokha</div>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="text_7" style="overflow:hidden">
                        <div class="image_box_8">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/5th building.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Premium Bungalow</div>
                    </div>
                </div>

                <div class="col-lg-3 py-3">
                    <div class="text_8" style="overflow:hidden">
                        <div class="image_box_9">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/projects_2nd_house.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Residence at Godamchour
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 py-3">
                    <div class="text_9" style="overflow:hidden">
                        <div class="image_box_10">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/ajira background.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Commercial Building Thimi</div>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div style="padding-top: 5rem;" class="container single_container">
            <!-- <div class="py-4">
                <h1 class="">Popular Projects</h1>
            </div> -->
            <div class="row">
                <div class="col-lg-3 py-3">
                    <div class="text_6" style="overflow:hidden">
                        <div class="image_box_7">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/building1.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Commercial Building Balkot</div>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="text_7" style="overflow:hidden">
                        <div class="image_box_8">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/projects_3rd_house.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Residence at Imadol</div>
                    </div>
                </div>

                <div class="col-lg-3 py-3">
                    <div class="text_8" style="overflow:hidden">
                        <div class="image_box_9">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/projects_4th_house.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Residence at Nagarjun
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 py-3">
                    <div class="text_9" style="overflow:hidden">
                        <div class="image_box_10">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/projects_5th_house.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Residence at Baneshwor</div>
                    </div>
                </div>
            </div>
    </section>


    <section>
        <div style="padding-top: 5rem;" class="container single_container">
            <!-- <div class="py-4">
                <h1 class="">Popular Projects</h1>
            </div> -->
            <div class="row">
                <div class="col-lg-3 py-3">
                    <div class="text_6" style="overflow:hidden">
                        <div class="image_box_7">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/projects_6th_house.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Residence at Tokha</div>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="text_7" style="overflow:hidden">
                        <div class="image_box_8">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/7th building.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Simple Home Design</div>
                    </div>
                </div>

                <div class="col-lg-3 py-3">
                    <div class="text_8" style="overflow:hidden">
                        <div class="image_box_9">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/building2.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Bungalow at Swayambhu
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 py-3">
                    <div class="text_9" style="overflow:hidden">
                        <div class="image_box_10">
                            <img class="comm_building"
                                style="height: 300px;object-fit: cover;border-radius:10px 10px 0px 0px;"
                                src="{{ asset('frontend/image/4th building.jpg') }}" alt="pic">
                        </div>
                        <div class="w1">Residence at Kalanki</div>
                    </div>
                </div>
            </div>
    </section>

@endsection
