<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <title>SIG Rebirth</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-572-designer.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 572 Designer

https://templatemo.com/tm-572-designer

-->
</head>

<body>

    <div class="loader">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" width="34px" height="40px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;"
            xml:space="preserve">
            <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.8s"
                    repeatCount="indefinite" />
                <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.8s"
                    repeatCount="indefinite" />
                <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.8s"
                    repeatCount="indefinite" />
            </rect>
            <rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.8s"
                    repeatCount="indefinite" />
                <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.8s"
                    repeatCount="indefinite" />
                <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.8s"
                    repeatCount="indefinite" />
            </rect>
            <rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.8s"
                    repeatCount="indefinite" />
                <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.8s"
                    repeatCount="indefinite" />
                <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.8s"
                    repeatCount="indefinite" />
            </rect>
        </svg>
    </div>

    <header id="top">
        <nav class="main-navigation navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/tentang"><img src="assets/images/white-logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- Dropdown Peta Penduduk -->
                        <li class="nav-item">
                            <div class="dropdown mt-2">
                                <button class="btn btn-secondary dropdown-toggle @yield('kepadatan_penduduk') @yield('persebaran')" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Peta Penduduk
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="nav-link @yield('persebaran')" href="{{ route('persebaran.index') }}">Jumlah Penduduk</a></li>
                                    <li><a class="nav-link @yield('kepadatan_penduduk')" href="{{ route('kepadatan.penduduk') }}">Kepadatan Penduduk</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- Dropdown Peta Sekolah -->
                        <li class="nav-item">
                            <div class="dropdown mt-2">
                                <button class="btn btn-secondary dropdown-toggle @yield('jumlah_sekolah') @yield('kepadatan_sekolah')" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Peta Sekolah Menengah Pertama
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="nav-link @yield('jumlah_sekolah')" href="{{ route('jumlah.sekolah') }}">Jumlah Sekolah</a></li>
                                    <li><a class="nav-link @yield('kepadatan_sekolah')" href="{{ route('kepadatan.sekolah') }}">Kepadatan Sekolah</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- Dropdown Peta Guru -->
                        <li class="nav-item">
                            <div class="dropdown mt-2">
                                <button class="btn btn-secondary dropdown-toggle @yield('jumlah_guru') @yield('kepadatan_guru')" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Peta Guru Menengah Pertama
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="nav-link @yield('jumlah_guru')" href="{{ route('jumlah.guru') }}">Jumlah Guru</a></li>
                                    <li><a class="nav-link @yield('kepadatan_guru')" href="{{ route('kepadatan.guru') }}">Kepadatan Guru</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('provinsi')" href="{{ route('provinsi.index') }}">Provinsi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('kabupaten')" href="{{ route('kabupaten.index') }}">Kabupaten</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tentang">Tentang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="page-banner change-name">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-3">
                    <div class="header-text">
                        <h2><em>Tentang</em> Kami</h2>
                        <p>Data Kelompok SIG Rebirth yang telah membuat dan merancang project ini hingga menjadi sesuai
                            dengan ketentuan yang diujiankan dalam mata kuliah Sistem Informasi Geografis di STT Terpadu
                            Nurul Fikri Jakarta</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-page-map">
        <div class="container expanded">
            <div class="row">
                <div class="col-lg-12">

                    <!-- You can easily copy and paste your own map point from Google Maps -> Share -> Embed a map -->

                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15861.145821444023!2d106.82823839767495!3d-6.356954898127369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sid!2sid!4v1736658900375!5m2!1sid!2sid"
                            width="100%" height="550px" frameborder="0" style="border:0"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us-page">
        <div class="container">
            <div class="col-lg-12">
                <div class="contact-page-form">
                    <div class="row">
                        <div class="col-lg-4 align-self-center">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-heading">
                                            <h2>Developer Profile<br><em>SIG Rebirth</em>!</h2>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-info">
                                <ul>
                                    <li>
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="48"
                                                viewBox="0 0 24 24" width="48">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M12 2c-4.97 0-9 4.03-9 9 0 4.17 2.84 7.67 6.69 8.69L12 22l2.31-2.31C18.16 18.67 21 15.17 21 11c0-4.97-4.03-9-9-9zm0 2c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.3c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" />
                                            </svg></div>
                                        <h6>Fajar Septianto</h6>
                                        <span>STT Terpadu Nurul Fikri - 0110221171</span>
                                    </li>
                                    <li>
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="48"
                                                viewBox="0 0 24 24" width="48">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M12 2c-4.97 0-9 4.03-9 9 0 4.17 2.84 7.67 6.69 8.69L12 22l2.31-2.31C18.16 18.67 21 15.17 21 11c0-4.97-4.03-9-9-9zm0 2c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.3c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" />
                                            </svg></div>
                                        <h6>Muhammad Salsabil</h6>
                                        <span>STT Terpadu Nurul Fikri - 0110221178</span>
                                    </li>
                                    <li>
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="48"
                                                viewBox="0 0 24 24" width="48">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M12 2c-4.97 0-9 4.03-9 9 0 4.17 2.84 7.67 6.69 8.69L12 22l2.31-2.31C18.16 18.67 21 15.17 21 11c0-4.97-4.03-9-9-9zm0 2c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.3c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" />
                                            </svg></div>
                                        <h6>Anggi Alfian</h6>
                                        <span>STT Terpadu Nurul Fikri - 0110221042</span>
                                    </li>
                                    <li>
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="48"
                                                viewBox="0 0 24 24" width="48">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M12 2c-4.97 0-9 4.03-9 9 0 4.17 2.84 7.67 6.69 8.69L12 22l2.31-2.31C18.16 18.67 21 15.17 21 11c0-4.97-4.03-9-9-9zm0 2c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.3c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" />
                                            </svg></div>
                                        <h6>Paizal Merdijaya</h6>
                                        <span>STT Terpadu Nurul Fikri - 0110221014</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Hire us to Work on a Project?</h2>
                </div>
                <div class="col-lg-4">
                    <div class="white-button">
                        <a href="#">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-widget">
                        <img src="assets/images/footer-logo.png" alt="designer template by TemplateMo">
                        <p>Persebaran Peta Sekolah untuk daerah Sulawesi Selatan.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="newsletter-widget">
                        <h4>Subscribe To Our Newsletter</h4>
                        <form id="subscribe" action="" method="get">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Type your email..." required="">
                                    <button type="submit" id="form-submit" class="text-button">
                                        Submit
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="sub-footer">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Copyright © 2025 Kelompok SIG Rebirth., Ltd. All Rights Reserved.

                        </div>
                        <div class="col-lg-6">
                            <a href="#top" class="scroll-to-top">
                                Go to Top
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        setTimeout(function() {
            $('.loader').fadeToggle();
        }, 2000);
        $("a[href='#top']").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });
    </script>

</body>

</html>
