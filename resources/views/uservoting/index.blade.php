{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Beranda</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('backend/assets/img/kaiadmin/favicon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('backend/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('backend/assets/css/fonts.min.css') }}"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/kaiadmin.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/demo.css') }}" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('include.frontend.header')
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="section">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/logo-custom.png') }}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/sakola.jpg') }}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="container">
                    <div class="welcome text-center mt-5">
                        <div class="col mb-5">
                            <h1>Selamat datang di E-pilketos</h1>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <h2>Daftar Kandidat Calon Ketua OSIS</h2>
                    </div>
                    <div class="row">
                        @foreach ($kandidat as $data)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="text-center votcard shadow-md bg-white p-4 pt-5 h-100">
                                    <img class="rounded-pill shadow-md p-2 w-100"
                                        src="{{ asset('images/kandidat/' . $data->foto) }}" alt="">
                                    <h4 class="mt-3 fs-5 mb-1 fw-bold">{{ $data->no_urut }}</h4>
                                    <h6 class="fs-7">Ketua :<span class="text-primary fw-bold">
                                            {{ $data->nama_ketua }}</span></h6>
                                    <h6 class="fs-7">Wakil Ketua :<span class="text-primary fw-bold">
                                            {{ $data->nama_wakil }}</span></h6>
                                    <p class="text-dark fs-8">Kelas : {{ $data->kelas }}</p>
                                    <p class="text-dark fs-8">Jurusan : {{ $data->jurusan }}</p>
                                    <p class="text-dark mb-3 fs-8">Tahun ajaran : {{ $data->tahun_ajaran }}</p>
                                    <button data-id="{{ $data->id }}" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                        class="btn btn-primary fw-bolder fs-8 view-manifesto">Visi & Misi</button>
                                    <button class="btn btn-danger fw-bolder px-4 ms-2 fs-8">Vote</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @include('include.backend.footer')
        </div>
    </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-6 fw-bold fs-5" id="exampleModalLabel">Visi & Misi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="molist">
                        <h6>Visi</h6>
                        <li id="visi"></li>
                        <h6>Misi</h6>
                        <li id="misi"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS Files -->
    <script src="{{ asset('backend/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('backend/assets/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('backend/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('backend/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('backend/assets/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- Kaiadmin JS -->
    <script src="{{ asset('backend/assets/js/kaiadmin.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('backend/assets/js/setting-demo.js') }}"></script>
    <script src="{{ asset('backend/assets/js/demo.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var buttons = document.querySelectorAll('.view-manifesto');
            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var id = this.getAttribute('data-id');
                    fetch('/get-manifesto/' + id)
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('visi').innerText = data.visi;
                            document.getElementById('misi').innerText = data.misi;
                        });
                });
            });
        });
    </script>
</body>

</html>
 --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>E-PILKETOS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="{{ asset('') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo.png" alt="">
                <h1 class="sitename">E-Pilketos</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <form id="logout-form" action="{{ route('pemilih.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>


        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Selamat datang</h1>
                        <p data-aos="fade-up" data-aos-delay="100">Di Website Pemiihan Osis SMK ASSALAM Silahkan Login
                            untuk memilih Kandidat</p>
                        <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                            <a href="" class="btn-get-started">Get Started <i class="bi bi-arrow-right"></i></a>
                            {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                                class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i
                                    class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Values Section -->
        <section id="values" class="values section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Calon Kandidat Osis </h2>
                <p>SMK<br></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row mb-5">
                    @foreach ($kandidat as $data)
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card text-center q">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img class="rounded-pill shadow-md p-2 me-3"
                                        src="{{ asset('images/kandidat/' . $data->foto) }}" width="200px"
                                        alt="foto Ketua">
                                    <img class="rounded-pill shadow-md p-2"
                                        src="{{ asset('images/kandidat/wakil/' . $data->foto_wakil) }}" width="200px"
                                        alt="foto Ketua">
                                </div>
                                <h3>{{ $data->nama_ketua }}</h3>
                                <h6 class="fs-7">Wakil Ketua :<span class="text-primary fw-bold">
                                        {{ $data->nama_wakil }}</span></h6>
                                <p class="text-dark fs-8">Kelas : {{ $data->kelas }}</p>
                                <p class="text-dark fs-8">Jurusan : {{ $data->jurusan }}</p>
                                <p class="text-dark mb-3 fs-8">Tahun ajaran : {{ $data->tahun_ajaran }}</p>
                                <div class="row">
                                    <div class="col-6">
                                    <button data-id="{{ $data->id }}" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                        class="btn btn-primary fw-bolder view-manifesto">Visi
                                        & Misi</button>
                                    </div>
                                    <div class="col-6">
                                    @if ($pemilih->status == 0)
                                        <form method="POST" action="{{ route('vote.store') }}" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="id_pemilih" value="{{ $pemilih->id }}">
                                            <input type="hidden" name="id_kandidat" value="{{ $data->id }}">
                                            <button type="submit"
                                                class="btn btn-danger fw-bolder px-4 ms-2 fs-8">Vote</button>
                                        </form>
                                    @else
                                        <button class="btn btn-secondary fw-bolder px-4 ms-2 fs-8" disabled>Already
                                            Voted</button>
                                    @endif
                                </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div><!-- End Card Item -->
            <br>
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Perhitungan Sementara</div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>

            </div>
            </div>


        </section><!-- /Values Section -->

        <!-- Stats Section -->
        <!-- Recent Posts Section -->
        <section id="recent-posts" class="recent-posts section">

            <!-- Section Title -->
            {{-- <div class="container section-title" data-aos="fade-up">
                <h2>Recent Posts</h2>
                <p>Recent posts form our Blog</p> --}}
            </div><!-- End Section Title -->

            {{-- <div class="container">

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                                <span class="post-date">December 12</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                                <span class="post-date">July 17</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                                <span class="post-date">September 05</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item --> --}}

            </div>

            </div>

        </section><!-- /Recent Posts Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            {{-- <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div><!-- End Section Title --> --}}

            {{-- <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street</p>
                                    <p>New York, NY 535022</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55</p>
                                    <p>+1 6678 254445 41</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com</p>
                                    <p>contact@example.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday</p>
                                    <p>9:00AM - 05:00PM</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required="">
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form --> --}}

            </div>

            </div>

        </section><!-- /Contact Section -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-6 fw-bold fs-5" id="exampleModalLabel">Visi & Misi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="molist">
                            <h6>Visi</h6>
                            <li id="visi"></li>
                            <h6>Misi</h6>
                            <li id="misi"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">FlexStart</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Annisa sri wulandari</p>
                        <p>Kp Sekeawi</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+62 857 0305 4814</span></p>
                        <p><strong>Email:</strong> <span>nssriwulandari@gmail.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">FlexStart</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var buttons = document.querySelectorAll('.view-manifesto');
            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var id = this.getAttribute('data-id');
                    fetch('/get-manifesto/' + id)
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('visi').innerText = data.visi;
                            document.getElementById('misi').innerText = data.misi;
                        });
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($labels),
                datasets: [{
                    label: 'Jumlah Suara',
                    data: @json($hasil),
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return value
                            }
                        }
                    }
                }
            }
        });
    </script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>


</body>

</html>
