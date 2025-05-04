<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Engitech - Online Library</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('edu/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('edu/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+62 897 6542 3124</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>Davern@example.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="#" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book mr-3"></i>Engitech</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Sign Up</a>
                @endauth
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white mt-4 mb-4">Library For IoT Engineer</h1>
            <h1 class="text-white display-1 mb-5">Component Library</h1>
            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-dark">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-dark py-2 px-4 d-none d-lg-block">Sign Up</a>
            @endauth
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <section id="about">
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="{{asset('edu/img/tentang.jpg')}}" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="section-title position-relative mb-4">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us</h6>
                            <h1 class="display-4">First Choice For Online IoT Component Library</h1>
                        </div>
                        <p>Menyediakan Informasi mengenai komponen IoT, bagi kalian yang belum mengerti apa itu IoT. IoT adalah konsep yang menghubungkan perangkat fisik atau objek ke internet, sehingga mereka dapat berkomunikasi dan bertukar data tanpa memerlukan interaksi manusia. Singkatnya, IoT adalah jaringan perangkat yang terhubung yang dapat saling berkomunikasi dan mengontrol satu sama lain. </p>
                        <div class="row pt-3 mx-0">
                            <div class="col-3 px-0">
                                <div class="bg-success text-center p-4">
                                    <h1 class="text-white" data-toggle="counter-up">15</h1>
                                    <h6 class="text-uppercase text-white">Available<span class="d-block">Component</span></h6>
                                </div>
                            </div>
                            <div class="col-3 px-0">
                                <div class="bg-primary text-center p-4">
                                    <h1 class="text-white" data-toggle="counter-up">12</h1>
                                    <h6 class="text-uppercase text-white">Online<span class="d-block">Tutorial</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->


    <!-- Contact Start -->
    <section id="contact">
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                            <div class="d-flex align-items-center mb-5">
                                <div class="btn-icon bg-secondary mr-4">
                                    <i class="fa fa-2x fa-phone-alt text-white"></i>
                                </div>
                                <div class="mt-n1">
                                    <h4>Call Us</h4>
                                    <p class="m-0">+62 897 6542 3124</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="btn-icon bg-warning mr-4">
                                    <i class="fa fa-2x fa-envelope text-white"></i>
                                </div>
                                <div class="mt-n1">
                                    <h4>Email Us</h4>
                                    <p class="m-0">Davern@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="section-title position-relative mb-4">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Need Help?</h6>
                            <h1 class="display-4">Send Us A Message</h1>
                        </div>
                        <div class="contact-form">
                            <form>
                                <div class="row">
                                    <div class="col-6 form-group">
                                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Name" required="required">
                                    </div>
                                    <div class="col-6 form-group">
                                        <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Email" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Subject" required="required">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5" placeholder="Message" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->    
    </section>
    

    <!-- Footer Start -->
    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="#" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><i class="fa fa-book mr-3"></i>Engitech</h1>
                    </a>
                    <p class="m-0">Accusam nonumy clita sed rebum kasd eirmod elitr. Ipsum ea lorem at et diam est, tempor rebum ipsum sit ea tempor stet et consetetur dolores. Justo stet diam ipsum lorem vero clita diam</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p><i class="fa fa-phone-alt mr-2"></i>+62 897 6542 3124</p>
                    <p><i class="fa fa-envelope mr-2"></i>Davern@example.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-twitter"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-facebook-f"></i></a>
                        <a class="text-white" href="#"><i class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#contact"><i class="fa fa-angle-right mr-2"></i>Help & Support</a>
                        <a class="text-white-50" href="#contact"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">Engitech</a>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0">Designed by <a class="text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('edu/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('edu/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('edu/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('edu/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>