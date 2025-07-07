@extends('layouts.frontend.master')

@section('content')

<div class="main-hero-banner">
    <div class="banner_project_img ">
        <img class="bkg" src="{{ asset('frontend/image/backgroundimg.jpg') }}" alt="">
        <div class="banner-content">
            <div>
                <h1 style="font-size: 60px;color:white">Gallery</h1>
            </div>
            <p style="color:white;">Home/Gallery</p>
        </div>
    </div>

</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="pt-4">
                <h1>Commercial Buildings</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-1">
                    <div class="outer_gallery">
                        <div class="gallery_build">
                            <img class="comm_buil_1" src="{{ asset('frontend/image/ajira background.jpg') }}" alt="pic">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-3">
                    <div outer_gallery>
                        <div class="gallery_build">
                            <img class="comm_buil_1" src="{{ asset('frontend/image/gallery1.jpg') }}" alt="pic">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-3">
                    <div outer_gallery>
                        <div class="gallery_build">
                            <img class="comm_buil_1" src="{{ asset('frontend/image/gallery2.jpg') }}" alt="pic">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div>
                    <h1>Residence</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 py-3">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                {{-- <img class="comm_buil_1" src="{{ asset('frontend/image/gallery1.jpg') }}" alt="pic"> --}}
                                <a data-fancybox="gallery" href="image1.jpg">
                                    <img  class="comm_buil_1" src="{{ asset('frontend/image/gallery1.jpg') }}" alt="pic" />
                                  </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 py-3">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/gallery2.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 py-3">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/gallery3.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 py-3">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/gallery4.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 py-3">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/projects_4th_house.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 py-3">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/gallery6.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 py-3">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/projects_6th_house.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 py-3">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/gallery7.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 py-3">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/ajira background.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 py-3">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/7th building.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 py-3">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/building2.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 py-3">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/gallery8.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 py-3">
                        <!-- <div class="text_6" style="overflow:hidden">
                        <div class="image_box_7">
                            <img class="comm_building" src="./Ajira group_image/ajira background.jpg" alt="pic">
                        </div>
                    </div> -->
                    </div>

                    <div class="col-lg-4 py-3">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/building3.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 py-3">
                        <!-- <div class="text_6" style="overflow:hidden">
                        <div class="image_box_7">
                            <img class="comm_building" src="./Ajira group_image/5th building.jpg" alt="pic">
                        </div>
                    </div> -->
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="py-3">
                    <h1>Bungalows</h1>
                </div>
                <div class="row py-3">
                    <div class="col-lg-4">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/gallery9.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/building2.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/commercial building.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row py-3">
                    <div class="col-lg-4">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/box1.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/gallery10.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/gallery11.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row py-3">

                    <div class="col-lg-3">
                        {{-- <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/5th building.jpg') }}" alt="pic">
                            </div>
                        </div> --}}
                    </div>

                    <div class="col-lg-3 py-3" style="gap:5px">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/5th building.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 py-3">
                        <div class="outer_gallery">
                            <div class="gallery_build">
                                <img class="comm_buil_1" src="{{ asset('frontend/image/gallery11.jpg') }}" alt="pic">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="contactus_container">
            <div class="inner_contact">
                <h6 class="mb-3">Contact Info</h6>
                <div class="media">
                    <div class="media-left">
                        <i class="ri-map-pin-line stable_color"></i>
                    </div>
                    <div class="media-body">
                        <p style="font-size: 16px;font-weight:500">Address</p>
                        <span>New Baneshwor, Kathmandu</span>
                    </div>
                </div>

                <div class="media">
                    <div class="media-left">
                        <i class="ri-phone-fill stable_color"></i>
                    </div>
                    <div class="media-body">
                        <p style="font-size: 16px;font-weight:500">Phone</p>
                        <span>+977-01-47 97 022</span>
                    </div>
                </div>

                <div class="media">
                    <div class="media-left">
                        <i class="ri-mail-fill stable_color"></i>
                    </div>
                    <div class="media-body">
                        <p style="font-size: 16px;font-weight:500">Email</p>
                        <span>support@ajiragroup.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

@endsection
