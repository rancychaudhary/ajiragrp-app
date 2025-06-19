@extends('layouts.frontend.master')

@section('content')

<div>
    <img class="options_bg" src="./Ajira group_image/ajira background.jpg" alt="pic">
</div>


    <div style="padding-top: 5rem;" class="container">

        <h1 style="color:gray; padding-left: 50px;">AREA CONVERTER</h1>
        <p style="font-family:Open Sans ;padding-left:50px;">Home Land Area Converter</p>

    </div>

    <!-- <div style="font-family:Open Sans ;padding-left:130px;">
    <p>Home Land Area Converter</p>
</div> -->

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
