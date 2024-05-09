<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>PusMS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar-top bg-primary">
            <div class="container">
                <div class="d-flex justify-content-between topbar py-2">
                   
                    <div class="text-end pe-4 me-4 border-end border-dark search-btn">
                        <div class="search-form">
                            <form method="post" action="index.html">
                                <div class="form-group">
                                    <div class="d-flex">
                                        <input type="search" class="form-control border-0 rounded-pill" name="search-input" value="" placeholder="Search Here" required=""/>
                                        <button type="submit" value="Search Now!" class="btn"><i class="fa fa-search text-dark"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center topbar-icon">
                        <a href="#" class="me-4"><i class="fab fa-facebook-f text-dark"></i></a>
                        <a href="#" class="me-4"><i class="fab fa-twitter text-dark"></i></a>
                        <a href="#" class="me-4"><i class="fab fa-instagram text-dark"></i></a>
                        <a href="#" class=""><i class="fab fa-linkedin-in text-dark"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar Start -->
        <div class="container-fluid bg-dark">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-primary mb-0 display-5">Pus<span class="text-white">MS</span><i class="fa fa-spider text-primary ms-2"></i></h1>
                    </a>
                    <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-dark"></span>
                    </button>
                    <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                       
                            <a href="login_form.php" class="nav-item nav-link">Login</a>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Carousel Start -->
        <div class="container-fluid carousel px-0 mb-5 pb-5">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/dokter.jpg" class="img-fluid w-100" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h4 class="text-white mb-4 animated slideInDown">Puskesmas No.1</h4>
                                <h1 class="text-white display-1 mb-4 animated slideInDown">Keluarga sehat hanya di PusMS</h1>
                                <a href="login_form.php" class="me-2"><button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Login</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/dokter1.jpg" class="img-fluid w-100" alt="Second slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h4 class="text-white mb-4 animated slideInDown">Puskesmas No.1</h4>
                                <h1 class="text-white display-1 mb-4 animated slideInDown">Keluarga sehat hanya di PusMS</h1>
                                <a href="login_form.php" class="me-2"><button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Login</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev btn btn-primary border border-2 border-start-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next btn btn-primary border border-2 border-end-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        
      
        <!-- Get In Touch End -->


        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-img">
                            <div class="rotate-left bg-dark"></div>
                            <div class="rotate-right bg-dark"></div>
                            <img src="img/ayuy.jpg" class="img-fluid h-100" alt="img">
                            <div class="bg-white experiences">
                                <h1 class="display-3">20</h1>
                                <h6 class="fw-bold">Years Of Experiences</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                        <div class="about-item overflow-hidden">
                            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">About PusMS</h5>
                            <h1 class="display-5 mb-2">Layanan Pengendalian Terbaik Dunia Sejak 2008</h1>
                            <p class="fs-5" style="text-align: justify;">PusMS merupakan lembaga kesehatan primer yang menjadi garda terdepan dalam menyediakan layanan kesehatan yang terjangkau dan berkualitas bagi masyarakat. Dengan fokus pada pelayanan primer terpadu, Puskesmas tidak hanya menyediakan perawatan medis, tetapi juga aktif dalam melakukan promosi kesehatan dan pencegahan penyakit. Dibangun di tengah-tengah masyarakat, Puskesmas mengintegrasikan kebutuhan lokal dan mengadopsi pendekatan berbasis masyarakat, serta menjalin kemitraan yang kuat dengan berbagai pihak untuk meningkatkan kesehatan dan kesejahteraan bersama. Melalui inovasi dalam pelayanan dan komitmen terhadap kesetaraan dan keadilan, Puskesmas memainkan peran sentral dalam mencapai tujuan pembangunan berkelanjutan di bidang kesehatan.

</p>
                            <div class="row">
                                <div class="col-3">
                                    <div class="text-center">
                                        <div class="p-4 bg-dark rounded d-flex" style="align-items: center; justify-content: center;">
                                            <i class="fas fa-city fa-4x text-primary"></i>
                                        </div>
                                        <div class="my-2">
                                            <h5>Building</h5>
                                            <h5>Cleaning</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center">
                                        <div class="p-4 bg-dark rounded d-flex" style="align-items: center; justify-content: center;">
                                            <i class="fas fa-school fa-4x text-primary"></i>
                                        </div>
                                        <div class="my-2">
                                            <h5>Education</h5>
                                            <h5>center</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center">
                                        <div class="p-4 bg-dark rounded d-flex" style="align-items: center; justify-content: center;">
                                            <i class="fas fa-warehouse fa-4x text-primary"></i>
                                        </div>
                                        <div class="my-2">
                                            <h5>Warehouse</h5>
                                            <h5>Cleaning</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center">
                                        <div class="p-4 bg-dark rounded d-flex" style="align-items: center; justify-content: center;">
                                            <i class="fas fa-hospital fa-4x text-primary"></i>
                                        </div>
                                        <div class="my-2">
                                            <h5>Hospital</h5>
                                            <h5>Cleaning</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-5">Find Services</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Services Start -->
        <div class="container-fluid services py-5">
            <div class="container text-center py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Services</h5>
                    <h1 class="display-5">Layanan Pengendalian  Umum</h1>
                </div>
                <div class="row g-5">
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="bg-light rounded p-5 services-item">
                            <div class="d-flex" style="align-items: center; justify-content: center;">
                                <div class="mb-4 rounded-circle services-inner-icon">
                                    <i class="fa fa-spider fa-3x text-primary"></i>
                                </div>
                            </div>
                            <h4>Pelayanan Kesehatan</h4>
                            <p class="fs-5">Rumah sakit umum, klinik kesehatan masyarakat, dan program vaksinasi.</p>
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Learn More</button>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="bg-light rounded p-5 services-item">
                            <div class="d-flex" style="align-items: center; justify-content: center;">
                                <div class="mb-4 rounded-circle services-inner-icon">
                                    <i class="fa fa-spider fa-3x text-primary"></i>
                                </div>
                            </div>
                            <h4 class="text-center">Air Bersih dan Sanitasi</h4>
                            <p class="text-center fs-5">Penyediaan akses terhadap air bersih dan sistem sanitasi yang layak.</p>
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3">Learn More</button>
                        </div>
                    </div>
                   
                    
                </div>
                <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-4 wow fadeInUp" data-wow-delay=".3s">More Services</button>
            </div>
        </div>
        <!-- Services End -->


        <!-- Project Start -->
        
        <!-- Project End -->


       


        <!-- Call To Action Start -->
        <div class="container-fluid py-5 call-to-action wow fadeInUp" data-wow-delay=".3s" style="margin: 6rem 0;">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <img src="img/dokter2.jpg" class="img-fluid w-100 rounded-circle p-5" alt="">
                    </div>
                    <div class="col-lg-6 my-auto">
                        <div class="text-start mt-4">
                            <h1 class="pb-4 text-white">Daftar ke hospital Kami Untuk Mendapatkan Penawaran Terbaru</h1>
                        </div>
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <div class="d-flex call-btn">
                                    <input type="search" class="form-control py-3 px-4 w-100 border-0 rounded-0 rounded-end rounded-pill" name="search-input" value="" placeholder="Enter Your Email Address" required="Please enter a valid email"/>
                                    <button type="email" value="Search Now!" class="btn btn-primary border-0 rounded-pill rounded rounded-start px-5">Subscribe</button>
                                </div>
                            </div>
                        </form>  
                    </div>
                </div> 
            </div>
        </div>
        <!-- Call To Action End -->


        <!-- pricing Start -->
      
        <!-- Pricing End -->


        <!-- Team Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Team</h5>
                    <h1 class="display-5 w-50 mx-auto">Anggota Tim kami</h1>
                </div>
                <div class="row g-5">
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="rounded team-item">
                            <img src="img/team-1..jpg" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                            <div class="team-content bg-primary text-dark text-center py-3">
                                <span class="fs-4 fw-bold">Anisa</span>
                                <p class="text-muted mb-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex flex-column ">
                                <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="rounded team-item">
                            <img src="img/ayuy.jpg" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                            <div class="team-content bg-primary text-dark text-center py-3">
                                <span class="fs-4 fw-bold">Muhammad Syahrul </span>
                                <p class="text-muted mb-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex flex-column ">
                                <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                 
                  
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testiminial Start -->
    
        <!-- Testiminial End -->


        <!-- Footer Start -->
        
        <!-- Footer End -->



        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                        <a href="#" class="text-primary mb-0 display-6">Pus<span class="text-white">MS</span><i class="fa fa-spider text-primary ms-2"></i></a>
                    </div>
                    <div class="col-md-4 copyright-btn text-center text-md-start mb-3 mb-md-0 flex-shrink-0">
                        <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Copyright End -->
        

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>