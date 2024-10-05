<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://kit.fontawesome.com/4b18461fa0.js" crossorigin="anonymous"></script>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body style="background-color: #fcfcfc">
    
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
                  <a class="nav-link mx-lg-w" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2 active" href="{{route('product')}}">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="{{route('contact')}}">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="{{route('about')}}">About</a>
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

    <footer>
        <div class="container container-footer">
            <div class="row row-footer">
                <div class="col col-footer" id="company">
                    <h3 class="logo">SynCode Network</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, maiores </p>

                    <div class="social">
                        <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col col-footer" id="services">
                    <h3>Services</h3>
                    <div class="links">
                        <a href="#">Lorem, ipsum dolor.</a>
                        <a href="#">Lorem, ipsum.</a>
                        <a href="#">Lorem, ipsum.</a>
                        <a href="#">Lorem, ipsum.</a>
                    </div>
                </div>
                <div class="col col-footer" id="useful-links">
                    <h3>Links</h3>
                    <div class="links">
                        <a href="#">Lorem, ipsum.</a>
                        <a href="#">Lorem, ipsum.</a>
                        <a href="#">Lorem, ipsum.</a>
                        <a href="#">Lorem, ipsum.</a>
                    </div>
                </div>
                <div class="col col-footer" id="contact">
                    <h3>Contact</h3>
                    <div class="contact-details">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Lorem, ipsum dolor. <br> Lorem, ipsum.</p>
                    </div>
                    <div class="contact-details">
                        <i class="fa-solid fa-phone-volume"></i>
                        <p>Lorem, ipsum dolor. <br> Lorem, ipsum.</p>
                    </div>
                </div>
            </div>

            <div class="row row-footer">
                <div class="form">
                    <form action="">
                        <input type="text" placeholder="email here">
                        <button><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    {{-- FAQs --}}
    <script>
        var faq = document.getElementsByClassName("faq-box-question");
        var i;
        for (i = 0; i < faq.length; i++) {
            faq[i].addEventListener("click", function(){
                this.classList.toggle("active");

                var body = this.nextElementSibling;
                if(body.style.maxHeight === "100px"){
                    body.style.maxHeight = "0px";
                } else {
                    body.style.maxHeight = "100px";
                }
            });
        }
    </script>
    
    {{-- jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- cdnjs --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- custom js --}}
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>