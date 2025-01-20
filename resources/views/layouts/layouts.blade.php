<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo.ico') }}">
        <title>Website SDN Balekambang 01</title>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        {{-- AOS --}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        {{-- Magnific --}}
        <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        {{-- Summernote CSS --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css">


    </head>

<body>
    @include('sweetalert::alert')
    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Content --}}
    @yield('content')

        {{-- Footer --}}
        <section id="footer" class="bg-white" data-aos="zoom-out">
            <div class="container py-4">
                <footer>
                    <div class="row">
                        {{-- Kolom 1 Navigasi --}}
                        <div class="mb-3 col-12 col-md-3">
                            <h5 class="mb-3 fw-bold">Navigasi</h5>
                            <div class="d-flex">
                                <ul class="nav flex-column me-5">
                                    <li class="mb-2 nav-item">
                                        <a href="" class="p-0 nav-link text-muted">Profil Sekolah</a>
                                    </li>
                                    <li class="mb-2 nav-item">
                                        <a href="" class="p-0 nav-link text-muted">Agenda Sekolah</a>
                                    </li>
                                    <li class="mb-2 nav-item">
                                        <a href="" class="p-0 nav-link text-muted">Gallery</a>
                                    </li>
                                    <li class="mb-2 nav-item">
                                        <a href="" class="p-0 nav-link text-muted">Daftar Guru</a>
                                    </li>
                                    <li class="mb-2 nav-item">
                                        <a href="" class="p-0 nav-link text-muted">Info PPDB</a>
                                    </li>
                                    <li class="mb-2 nav-item">
                                        <a href="" class="p-0 nav-link text-muted">Prestasi</a>
                                    </li>
                                    <li class="mb-2 nav-item">
                                        <a href="" class="p-0 nav-link text-muted">Video Kegiatan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- Kolom 2 Media Sosial --}}
                        <div class="mb-3 col-12 col-md-3">
                            <h5 class="mb-3 fw-bold">Follow Kami</h5>
                            <div class="mb-3 d-flex">
                                <a href="" target="_blank" class="text-decoration-none text-dark">
                                    <img src="{{ asset('assets/icons/ic-instagram.svg') }}" height="30" width="30" class="me-4" alt="">
                                </a>
                                <a href="" target="_blank" class="text-decoration-none text-dark">
                                    <img src="{{ asset('assets/icons/ic-facebook.svg') }}" height="30" width="30" class="me-4" alt="">
                                </a>
                                <a href="" target="_blank" class="text-decoration-none text-dark">
                                    <img src="{{ asset('assets/icons/ic-youtube.svg') }}" height="30" width="30" class="me-4" alt="">
                                </a>
                            </div>
                        </div>

                        {{-- Kolom 3 Kontak Kami --}}
                        <div class="mb-3 col-12 col-md-3">
                            <h5 class="mb-3 font-inter fw-bold">Kontak Kami</h5>
                            <ul class="nav flex-column">
                                <li class="mb-2 nav-item">
                                    <a href="" target="_blank" class="text-decoration-none text-dark">
                                        <img src="{{ asset('assets/icons/ic-whatsapp.svg') }}" height="30" width="30" class="" alt=""> +62 8xx xxxx xxxx
                                    </a>
                                </li>
                            </ul>
                        </div>

                        {{-- Kolom Alamat --}}
                        <div class="mb-3 col-12 col-md-3">
                            <h5 class="mb-3 font-inter fw-bold">Alamat Sekolah</h5>
                            <p>Desa Bendungan, Kecamatan Jonggol, Kabupaten Bogor, Jawa Barat.</p>
                        </div>

                    </div>
                </footer>
            </div>
        </section>

        <section class="bg-light border-top" data-aos="zoom-in-down">
            <div class="container py-4">
                <div class="d-flex justify-content-between">
                    <div>
                        SDN Balekambang 01
                    </div>
                    <div class="d-flex">
                        <p class="me-4">Syarat & Ketentuan</p>
                        <p>
                            <a href="/" class="text-decoration-none text-dark">Kebijakan Privacy</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- Footer --}}




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="{{ asset('assets/js/magnific.js') }}"></script>

        {{-- JQUERY --}}
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27xc0jk=" crossorigin="anonymous"></script>

        {{-- Summernote JS --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
            });
        });
        </script>

        <script>
            const navbar = document.querySelector(".fixed-top");
            window.onscroll = () => {
                if (window.scrollY > 100) {
                    navbar.classList.add("scroll-nav-active");
                    navbar.classList.add("text-nav-active");
                    // navbar.classList.remove("navbar-dark");
                } else {
                    navbar.classList.remove("scroll-nav-active");
                    // navbar.classList.add("navbar-dark");
                }
            };

            // Animasi AOS
            AOS.init();

            // Magnific
            $(document).ready(function() {
                $('.image-link').magnificPopup({
                    type: 'image',
                    retina: {
                        ratio: 1,
                        replaceSrc: function(item, ratio) {
                            return item.src.replace(/\.\w+$/, function(m) {
                                return '@2x' + m;
                            });
                        }
                    }
                });
            });

        </script>



    </body>

    </html>
