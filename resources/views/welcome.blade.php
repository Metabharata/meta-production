<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo.ico') }}">

        <title>Metabharata Official</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- AOS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    </head>

    <body>
    <!-- navbar -->

            <nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#hero">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="#sekilas">Sekilas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="#galeri">Galeri</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="#tentang">Tentang</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="{{ route('login') }}" class="btn btn-danger">Login</a>
            </div>
            </div>
        </div>
        </nav>
        
        <!--Hero-->
        <section id="hero">
            <div class="container text-center text-white">
                <div class ="hero-title" data-aos="fade-up"data-aos-anchor-placement="top-bottom">
                <h1>METABHARATA Official Test</h1>
                <h5>Action Side to Side Game Berbasis Kesenian Wayang</h5>
                </div>
            </div>
        </section>

        <!-- Penawaran program -->
        <section id ="program" style="margin-top: -70px">
             <div class="container">
                <div class="row row-cols-1 row-cols-md-4 g-4" data-aos="fade-up"data-aos-anchor-placement="top-bottom">
  <div class="col mt-2">
    <div class="card">
    <img src="{{ asset('assets/icons/ic-yudistira.svg') }}" class="card-img-top mt-2" height="100" width="100" alt="">
      <div class="card-body">
        <h5>Beragam karakter wayang dengan grafis berkualitas.</h5>
      </div>
    </div>
  </div>
  <div class="col mt-2">
    <div class="card">
    <img src="{{ asset('assets/icons/ic-mode.svg') }}" class="card-img-top mt-2" height="100" width="100" alt="">
      <div class="card-body">
    <h5>Mode pertarungan yang variatif.</h5>
      </div>
    </div>
  </div>
  <div class="col mt-2">
    <div class="card">
    <img src="{{ asset('assets/icons/ic-bahasa.svg') }}" class="card-img-top mt-2" height="100" width="100" alt="">
      <div class="card-body">
    <h5>Tersedia dalam 3 bahasa yang dapat disesuaikan.</h5>
      </div>
    </div>
  </div>
  <div class="col mt-2">
    <div class="card">
    <img src="{{ asset('assets/icons/ic-lock.svg') }}" class="card-img-top mt-2" height="100" width="100" alt="">
      <div class="card-body">
    <h5>Cerita lebih komprehensif dan terperiodisasi.</h5>
      </div>
    </div>
  </div>
</div>
             </div>
        </section>

        <!-- sekilas info -->
        <section id="sekilas" class="py-5" data-aos="fade-left">
                <div class="container py-5">
                    <h2 class=" fw-bold text-center">Sekilas Info</h2>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <div class="stripe me-2"></div>
                                <h3>Daftar Metabharata</h3>
                            </div>
                            <h4 class="fw-bold mb-2">Mainkan Metabharata dan Populerkan Kesenian Wayang Bersama Kami.</h4>
                            <p class="mb-3">Jelajahi petualangan dunia pewayangan yang menantang. Kalahkan semua musuh dan jadilah kesatria sejati.</p>
                            <div class="d-flex align-items-center">
                                <h4 class="nav-link" href="#">Download Sekarang</h4>
                                <img src="{{ asset('assets/icons/ic-playstore.svg') }}" height="40" width="80" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <img src="{{ asset('assets/images/il-phone.svg') }}" class="img-fluid" alt="">
                        </div>

                    </div>
                </div>
        </section>

        <!-- Galeri -->
        <section id="galeri" class="py-5" data-aos="fade-right">
            <div class="container py-5">
                <h2 class=" fw-bold text-center">Galeri Metabharata</h2>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center">
                            <div class="stripe me-2"></div>
                            <h3>Latar dan Karakter Pertarungan</h3>
                        </div>
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                <img src="{{ asset('assets/images/il-tokoh.svg') }}" class="d-block w-100" height="300" width="600" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ asset('assets/images/il-almanak.svg') }}" class="d-block w-100" height="300" width="600" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="{{ asset('assets/images/il-arena.svg') }}" class="d-block w-100" height="300" width="600"  alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="{{ asset('assets/images/il-menang.svg') }}" class="d-block w-100" height="300" width="600"  alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="{{ asset('assets/images/il-petapa.svg') }}" class="d-block w-100" height="300" width="600"  alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="{{ asset('assets/images/il-tokoh1.svg') }}" class="d-block w-100" height="300" width="600"  alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <h4 class="fw-bold mb-2">Bersiaplah untuk petualangan luar biasa dalam dunia Metabharata.</h4>
                        <p class="mb-3">"Bawa Wayang ke layar ponsel Anda! Metabharata hadir dalam pertempuran epik yang disertai dengan edukasi cerita singkatnya, dimulai dari karakter-karakter pewayangan yang ikonik dan berbagai latar yang indah dan menarik."</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- tentang -->
        <section id="tentang" class="py-5">
            <div class="container py-5">
                <div class="text-center">
                    <div class="tentangMeta">
                    <h2 class=" fw-bold text-center" data-aos="zoom-in">Tentang Metabharata</h2>
                    </div>
                        <div class="row d-flex align-items-center">
                        <div class="col-lg-5">
                        <div class="card-info">
                            <div class="p-2" data-aos="zoom-in">
                                <img src="{{ asset('assets/icons/ic-logo.svg') }}" height="100" width="100" alt="">
                                <p>Distopia Langit Kurusetra, merupakan game action side-to-side yang mengadaptasikan kisah Perang Bharatayudha. Melalui variasi mode pertarungan dan aspek cerita yang kuat, game ini dirancang sebagai strategi untuk merevitalisasi kesenian wayang yang mulai terdegradasi pada era modernisasi.</p>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-maps img-fluid" data-aos="zoom-in-up">
                            <div class="card" style="width: 28rem;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.4738542098507!2d112.67002057383608!3d-7.300538471765726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb7a806b1ce1%3A0x571f4546e898d79a!2sSurabaya%20State%20University%20-%20Lidah%20Campus!5e0!3m2!1sen!2sid!4v1693440477758!5m2!1sen!2sid" width="100%" height="450"></iframe>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer -->

        <section id="footer" class="footer-distributed">
        <div class="container">
        <div class="footer-left">
                <h3>Metabharata<span> Official</span></h3>

                <p class="footer-company-name">Copyright © 2023 <strong>Metabharata Official.</strong> All rights reserved</p>
            </div>

            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p>Surabaya, Jawa Tmur</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p href="mailto:sagar00001.co@gmail.com">metabharata.official@gmail.com</p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <strong>Bergabunglah dengan kami</strong> di platform media sosial untuk mendapatkan pembaruan terbaru, berita menarik, dan konten inspiratif.
                </p>
                <div class="footer-icons">
                    <a href="https://www.instagram.com/metabharata.official/"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.youtube.com/@MetabharataOfficial"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
</section>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            const navbar = document.querySelector(".fixed-top");
            window.onscroll = () => {
                if(window.scrollY > 100) {
                    navbar.classList.add("scroll-nav-active");
                    navbar.classList.add(".text-nav-active");
                    navbar.classList.remove("navbar-dark");
                } else {
                    navbar.classList.remove("scroll-nav-active");
                    navbar.classList.add("navbar-dark");
                }
            };

        // animasi aos
          AOS.init();
        </script>
        <script src="https://kit.fontawesome.com/f718bb0d4d.js" crossorigin="anonymous"></script>

    </body>
</html>
