<div class="top-nav-sticky " id="header">
    <nav class="navbar navbar-expand-lg navbar-light" id="header"
        style=" ">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img class="logo_1" src="{{asset('frontend/image/ajira logo.png')}}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('frontend.home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black">
                          options
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="{{route('frontend.landareaconverter')}}" id="option_button_hover">Land Area Converter</a></li>
                          <li><a class="dropdown-item" href="{{route('frontend.homecostcalculator')}}" id="option_button_hover">Home Cost Calculator</a></li>
                          {{-- <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Home Cost Calculator</a></li> --}}
                        </ul>
                      </li>
                      {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li> --}}
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('frontend.projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('frontend.gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('frontend.blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('frontend.contactus') }}">Contact
                            Us</a>
                    </li>
                </ul>
                <a href="{{route('frontend.projects')}}" class="compare_button">
                    <button class="btn">Compare</button>
                </a>

            </div>
        </div>
    </nav>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.querySelector("#header");
        const handleScroll = () => {
            const scrollTop = window.scrollY;
            if (scrollTop > 100) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        };
        window.addEventListener("scroll", handleScroll);

        return () => {
            window.removeEventListener("scroll", handleScroll);
        };
    });

</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
