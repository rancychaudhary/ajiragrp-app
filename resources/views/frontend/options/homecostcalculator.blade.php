{{-- @extends('layouts.frontend.master') --}}

{{-- @section('content') --}}

{{-- <div class="main-hero-banner">
    <div class="banner_project_img home_cost ">
        <img class="bkg" src="{{ asset('frontend/image/background img.jpg') }}" alt="">

        <div class="banner-content">
            <div>
                <h1 style="font-size: 60px;color:white">Area Converter</h1>
            </div>
            <p style="color:white;">Home/Land Area Converter</p>
        </div>
    </div>
</div> --}}
{{-- <div>
    <img class="bkg" src="{{ asset('frontend/image/home _cost_calculator_image.png') }}" alt="img">
        <div class="ajira-banner">
            <div>
                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
            </div>
        </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('frontend/css/index.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section>
        <div>
            <div class="big-builder">
                <img class="bkg" src="{{ asset('frontend/image/home _cost_calculator_image.png') }}" alt="img">
             </div>
                    <div class="container-builder">
                        <div class="logo-builder">
                            <a href=""><img src="frontend/image/builderslogo.jpeg" alt="pic" class="logo-build"></a>
                        </div>
                        <h2>Home Cost Calculator</h2>
                        <p></p>
                        <form>
                            <input type="hidden" name="csrfmiddlewaretoken" value="FahhEJAEROCcj03CDsMRF7dzzPPMACFuMuuZmEltAQOdWMT7yhmHeJHTdQv2eBtF">
                            <div class="form-group">
                                <label for="name">Enter Your Name *</label><br/>
                                <input type="text" name="name" placeholder="Full Name" required="">
                            </div>
                            <div class="form-group">
                                <label for="size">Select Land Area *</label><br/>
                                <select name="size" id="size" required="">
                                    <option value="" disabled="" selected="">Select Size</option>
                                    <option value="2.5-3.0">2.5 to 3.0 aana</option>
                                    <option value="3.0-3.5">3.0 to 3.5 aana</option>
                                    <option value="3.5-4.0">3.5 to 4.0 aana</option>
                                    <option value="4.0-4.5">4.0 to 4.5 aana</option>
                                    <option value="4.5-5.0">4.5 to 5.0 aana</option>
                                    <option value="&gt; 5.0">Greater than 5 aana</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ground_coverage">Enter Approximate Ground Coverage *</label>
                                <input type="text" name="ground_coverage" placeholder="In Sq.ft" required="">
                            </div>
                            <div class="form-group">
                                <label for="construction_standard">Construction standard *</label>
                                <select name="construction_standard" required="">
                                    <option value="" disabled="" selected="">Select</option>
                                    <option value="affordable">Affordable Construction</option>
                                    <option value="premium">Premium Construction</option>
                                </select>
                            </div>

                            <button type="submit" class="button-next">Next</button>
                        </form>
                    </div>

        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
