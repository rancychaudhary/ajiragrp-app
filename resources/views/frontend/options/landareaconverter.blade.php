@extends('layouts.frontend.master')

@section('content')

<div class="main-hero-banner">
    <div class="banner_project_img ">
        <img class="bkg" src="{{ asset('frontend/image/backgroundimg.jpg') }}" alt="">

        <div class="banner-content">
            <div>
                <h1 style="font-size: 60px;color:white">Area Converter</h1>
            </div>
            <p style="color:white;">Home/Land Area Converter</p>
        </div>
    </div>

</div>

    <div class="container form_table">
        <div class="row">
            <div class="col-lg-3">
                <form action="">
                    <label for="Ropani" style="color:gray">Ropani</label>
                    <input type="text" class="form-control" placeholder=""  name="ropani" id="ropani" min="0">
                </form>
            </div>

            <div class="col-lg-3">
                <form action="">
                    <label for="Aana" style="color:gray">Aana</label>
                    <input type="text" class="form-control" name="aana" id="aana" min="0">
                </form>
            </div>

            <div class="col-lg-3">
                <form action="">
                    <label for="Paisa" style="color:gray">Paisa</label>
                    <input type="text" class="form-control" name="paisa" id="paisa" min="0">
                </form>
            </div>

            <div class="col-lg-3">
                <form action="">
                    <label for="Daam" style="color:gray">Daam</label>
                    <input type="text" class="form-control" name="daam" id="daam" min="0">
                </form>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-4">
                <form action="">
                    <label for="Bigha" style="color:gray">Bigha</label>
                    <input type="text" class="form-control" name="bigha" id="bigha" min="0">
                </form>
            </div>

            <div class="col-lg-4">
                <form action="">
                    <label for="Kattha" style="color:gray">Kattha</label>
                    <input type="text" class="form-control" name="kattha" id="kattha" min="0">
                </form>
            </div>

            <div class="col-lg-4">
                <form action="">
                    <label for="Dhur" style="color:gray">Dhur</label>
                    <input type="text" class="form-control" name="dhur" id="dhur" min="0">
                </form>
            </div>

        </div>


        <div class="row">
            <div class="col-lg-6">
                <form action="">
                    <label for="Sq Feet" style="color:gray">Sq Feet</label>
                    <input type="text" class="form-control" name="Sq Feet" id="Sq Feet" min="0">
                </form>
            </div>

            <div class="col-lg-6">
                <form action="">
                    <label for="Sq Meter" style="color:gray">Sq Meter</label>
                    <input type="text" class="form-control" name="Sq Meter" id="Sq Meter" min="0">
                </form>
            </div>
        </div>

    </div>

@endsection
