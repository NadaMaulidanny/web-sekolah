<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top">

        <div class="container" data-aos="fade-in" data-aos-duration="1000">
          <a class="navbar-brand me-auto" href="#">SynCode Network</a>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SynCode Network</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#">Company</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#">About</a>
                </li>
              </ul>
            </div>
          </div>
          <a href="{{route('login')}}" class="login-button">Login</a>
          <button class="navbar-toggler pe-0" style="border: none;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>
    {{-- End Navbar --}}

    {{-- Hero Section --}}
    <section class="hero" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copy">
                        <div class="text-label">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <div class="text-hero-bold">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <div class="text-hero-regular">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, est magni vitae perspiciatis at odit accusamus ipsa sapiente perferendis ea.
                        </div>
                        <div class="cta">
                            <a href="#" class="btn-prim">Explore now</a>
                            <a href="#" class="btn-sec">See Pricing</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/pics/hero.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    
    {{-- End Hero Section --}}

    {{-- Brand Section --}}
    <section class="testimoni-brand" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="title-sec">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, animi!</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="testimonial-item">
                        <img src="{{asset('assets/pics/bar-chart.png')}}" alt="">
                        <h5>Logoipsum</h5>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="testimonial-item">
                        <img src="{{asset('assets/pics/bar-chart.png')}}" alt="">
                        <h5>Logoipsum</h5>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="testimonial-item">
                        <img src="{{asset('assets/pics/bar-chart.png')}}" alt="">
                        <h5>Logoipsum</h5>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="testimonial-item">
                        <img src="{{asset('assets/pics/bar-chart.png')}}" alt="">
                        <h5>Logoipsum</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="testimonial-item">
                        <img src="{{asset('assets/pics/bar-chart.png')}}" alt="">
                        <h5>Logoipsum</h5>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="testimonial-item">
                        <img src="{{asset('assets/pics/bar-chart.png')}}" alt="">
                        <h5>Logoipsum</h5>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="testimonial-item">
                        <img src="{{asset('assets/pics/bar-chart.png')}}" alt="">
                        <h5>Logoipsum</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>