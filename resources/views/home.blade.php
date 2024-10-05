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
                  <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="{{route('product')}}">Products</a>
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
    <section class="testimoni-brand">
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
                <div class="col-auto">
                    <div class="testimonial-item">
                        <img src="{{asset('assets/pics/bar-chart.png')}}" alt="">
                        <h5>Logoipsum</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Testimonial Brand --}}

    {{-- Why Choose Us --}}
    <div class="main">
        <div class="container">
            <div class="subtitle">
                <p>OUR PRINCIPLE</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div class="title-sec">
                    <h5 class="title-text">Mengapa kami adalah pilihan yang terbaik?</h5>
                </div>
                <a href="#" class="more-button">Explore More</a>
            </div>
        </div>
        
        
        <div class="why-choose-us">
            <ul>
                <li>
                    <h3 class="heading">FrontEnd Developer</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit excepturi accusamus minus
                    totam </p>
                    <a href="#">Read More ></a>
                    <span class="date">January 2021</span>
                    <span class="circle"></span>
                </li>
                <li>
                    <h3 class="heading">BackEnd Developer</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit excepturi accusamus minus
                    totam </p>
                    <a href="#">Read More ></a>
                    <span class="date">February 2021</span>
                    <span class="circle"></span>
                </li>
                <li>
                    <h3 class="heading">Full Stack Developer</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit excepturi accusamus minus
                    totam </p>
                    <a href="#">Read More ></a>
                    <span class="date">March 2021</span>
                    <span class="circle"></span>
                </li>
                <li>
                    <h3 class="heading">App Developer</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit excepturi accusamus minus
                    totam </p>
                    <a href="#">Read More ></a>
                    <span class="date">April 2021</span>
                    <span class="circle"></span>
                </li>
            </ul>
        </div>
    </div>
    {{-- End Why Choose Us --}}

    {{-- Company Statistics --}}
    <section class="statistic">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="statistic-item">
                        <i class="fa-solid fa-chart-line"></i>
                        <h5>Logoipsum</h5>
                        <p>Lorem ipsum dolor sit amet.</p>

                    </div>
                </div>
                <div class="col-auto">
                    <div class="statistic-item">
                        <i class="fa-solid fa-trophy"></i>
                        <h5>Logoipsum</h5>
                        <p>Lorem ipsum dolor sit amet.</p>

                    </div>
                </div>
                <div class="col-auto">
                    <div class="statistic-item">
                        <i class="fa-solid fa-building"></i>
                        <h5>Logoipsum</h5>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="statistic-item">
                        <i class="fa-solid fa-star"></i>
                        <h5>Logoipsum</h5>
                        <p>Lorem ipsum dolor sit amet.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Company Statistics --}}
    
    {{-- Our Principle Section --}}
    <section class="our-principle">
        <div class="container">
            <div class="subtitle">
                <p>OUR PRINCIPLE</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div class="title-sec">
                    <h5>Mengapa kami adalah pilihan yang terbaik?</h5>
                </div>
                <a href="#" class="more-button">Explore More</a>
            </div>
            <div class="column-card">
                <div class="card">
                    <img src="{{asset('assets/pics/hero-section.jpg')}}" alt="">
                    <div class="panel">
                        <i class="fas fa-home"></i> 
                        <h3>
                            Lorem ipsum dolor sit amet.
                        </h3>
                        <span class="breaker"></span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, recusandae.</p>

                        <a href="#" class="learn-more">Learn More</a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('assets/pics/hero-section.jpg')}}" alt="">
                    <div class="panel">
                        <i class="fas fa-home"></i> 
                        <h3>
                            Lorem ipsum dolor sit amet.
                        </h3>
                        <span class="breaker"></span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, recusandae.</p>                        
                        <a href="#" class="learn-more">Learn More</a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('assets/pics/hero-section.jpg')}}" alt="">
                    <div class="panel">
                        <i class="fas fa-home"></i> 
                        <h3>
                            Lorem ipsum dolor sit amet.
                        </h3>
                        <span class="breaker"></span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, recusandae.</p>
                        
                        <a href="#" class="learn-more">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Our Principle --}}

    {{-- Our Team --}}

    <section class="our-team">
        <div class="container">
            <div class="subtitle">
                <p>OUR TEAM</p>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <div class="title-sec">
                    <h5>Mengapa kami adalah pilihan yang terbaik?</h5>
                </div>
            </div>
            <div class="column-card">
                <div class="card-item">
                    <img src="{{asset('assets/pics/icon.jpeg')}}" alt="">
                    <div class="panel">
                        <h3>Jennie</h3>
                        <span class="breaker"></span>
                        <p>Software Developer</p>
                        <a href="#" class="learn-more">Learn More</a>
                    </div>
                </div>
                <div class="card-item">
                    <img src="{{asset('assets/pics/icon.jpeg')}}" alt="">
                    <div class="panel">
                        <h3>Jennie</h3>
                        <span class="breaker"></span>
                        <p>Software Developer</p>
                        <a href="#" class="learn-more">Learn More</a>
                    </div>
                </div>
                <div class="card-item">
                    <img src="{{asset('assets/pics/icon.jpeg')}}" alt="">
                    <div class="panel">
                        <h3>Jennie</h3>
                        <span class="breaker"></span>
                        <p>Software Developer</p>
                        <a href="#" class="learn-more">Learn More</a>
                    </div>
                </div>
                <div class="card-item">
                    <img src="{{asset('assets/pics/icon.jpeg')}}" alt="">
                    <div class="panel">
                        <h3>Jennie</h3>
                        <span class="breaker"></span>
                        <p>Software Developer</p>
                        <a href="#" class="learn-more">Learn More</a>
                    </div>
                </div>
                <div class="card-item">
                    <img src="{{asset('assets/pics/icon.jpeg')}}" alt="">
                    <div class="panel">
                        <h3>Jennie</h3>
                        <span class="breaker"></span>
                        <p>Software Developer</p>
                        <a href="#" class="learn-more">Learn More</a>
                    </div>
                </div>
                <div class="card-item">
                    <div class="panel-more">
                        <i class="fa-solid fa-users" style="font-size: 50px; align-items: center;"></i>
                        <h3>View All</h3>
                        <span class="breaker"></span>
                        <p>Our People</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    {{-- End Our Team --}}

    {{-- Testimonial --}}
    
    <section class="testimonial">
        <div class="container">
            <div class="subtitle">
                <p>OUR TEAM</p>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <div class="title-sec">
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                </div>
            </div>
            <div class="owl-carousel owl-theme testimonials-container">
                <div class="item testimonials-card">
                    <main class="test-card-body">
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <h2>Awesome Coding</h2>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti explicabo ex repellat beatae optio? Eaque illum quo dolores beatae sint!</p>
                        <div class="ratings">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </main>
                    <div class="profile">
                        <div class="profile-image">
                            <img src="{{asset('assets/pics/icon.jpeg')}}" alt="">
                        </div>
                        <div class="profile-desc">
                            <span>Person Name</span>
                            <span>Description</span>
                        </div>
                    </div>
                </div>

                <div class="item testimonials-card">
                    <main class="test-card-body">
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <h2>Awesome Coding</h2>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti explicabo ex repellat beatae optio? Eaque illum quo dolores beatae sint!</p>
                        <div class="ratings">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </main>
                    <div class="profile">
                        <div class="profile-image">
                            <img src="{{asset('assets/pics/icon.jpeg')}}" alt="">
                        </div>
                        <div class="profile-desc">
                            <span>Person Name</span>
                            <span>Description</span>
                        </div>
                    </div>
                </div>

                <div class="item testimonials-card">
                    <main class="test-card-body">
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <h2>Awesome Coding</h2>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti explicabo ex repellat beatae optio? Eaque illum quo dolores beatae sint!</p>
                        <div class="ratings">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </main>
                    <div class="profile">
                        <div class="profile-image">
                            <img src="{{asset('assets/pics/icon.jpeg')}}" alt="">
                        </div>
                        <div class="profile-desc">
                            <span>Person Name</span>
                            <span>Description</span>
                        </div>
                    </div>
                </div>

                <div class="item testimonials-card">
                    <main class="test-card-body">
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <h2>Awesome Coding</h2>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti explicabo ex repellat beatae optio? Eaque illum quo dolores beatae sint!</p>
                        <div class="ratings">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </main>
                    <div class="profile">
                        <div class="profile-image">
                            <img src="{{asset('assets/pics/icon.jpeg')}}" alt="">
                        </div>
                        <div class="profile-desc">
                            <span>Person Name</span>
                            <span>Description</span>
                        </div>
                    </div>
                </div>

                <div class="item testimonials-card">
                    <main class="test-card-body">
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <h2>Awesome Coding</h2>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti explicabo ex repellat beatae optio? Eaque illum quo dolores beatae sint!</p>
                        <div class="ratings">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </main>
                    <div class="profile">
                        <div class="profile-image">
                            <img src="{{asset('assets/pics/icon.jpeg')}}" alt="">
                        </div>
                        <div class="profile-desc">
                            <span>Person Name</span>
                            <span>Description</span>
                        </div>
                    </div>
                </div>

                <div class="item testimonials-card">
                    <main class="test-card-body">
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <h2>Awesome Coding</h2>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti explicabo ex repellat beatae optio? Eaque illum quo dolores beatae sint!</p>
                        <div class="ratings">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </main>
                    <div class="profile">
                        <div class="profile-image">
                            <img src="{{asset('assets/pics/icon.jpeg')}}" alt="">
                        </div>
                        <div class="profile-desc">
                            <span>Person Name</span>
                            <span>Description</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    

    {{-- testimonials end --}}

    {{-- FAQ --}}
    <section id="faq">
        <div class="faq-heading">
            <h3>faqs</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam in cumque nam culpa vitae necessitatibus nisi nemo officia nobis corrupti.</p>
        </div>

        <div class="faq-content">
            <div class="faq-box-container">
                <div class="faq-box">
                    <div class="faq-box-question">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <span class="faq-box-icon"></span>
                    </div>

                    <div class="faq-box-answer">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime eum culpa officia laudantium quae. Voluptatibus similique voluptatem distinctio cupiditate ab.</p>
                    </div>
                </div>

                <div class="faq-box">
                    <div class="faq-box-question">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <span class="faq-box-icon"></span>
                    </div>

                    <div class="faq-box-answer">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime eum culpa officia laudantium quae. Voluptatibus similique voluptatem distinctio cupiditate ab.</p>
                    </div>
                </div>

                <div class="faq-box">
                    <div class="faq-box-question">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <span class="faq-box-icon"></span>
                    </div>

                    <div class="faq-box-answer">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime eum culpa officia laudantium quae. Voluptatibus similique voluptatem distinctio cupiditate ab.</p>
                    </div>
                </div>

                <div class="faq-box">
                    <div class="faq-box-question">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <span class="faq-box-icon"></span>
                    </div>

                    <div class="faq-box-answer">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime eum culpa officia laudantium quae. Voluptatibus similique voluptatem distinctio cupiditate ab.</p>
                    </div>
                </div>
            </div>
            

            <div class="faq-img">
                <img src="{{asset('assets/pics/icon.jpeg')}}" alt="">
            </div>
        </div>
    </section>
    {{-- FAQ End --}}
    

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