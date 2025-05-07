@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background" style="background-image: url({{ asset('/images/gambar/akuntansi.jpg') }})">
            <div class="container">
                <div class="row extra-very-small-screen align-items-center">
                    <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Beranda</h1>
                        <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Akuntansi Perpajakan</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section> 
            <div class="container">  
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-7 text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h3 class="text-dark-gray fw-700 ls-minus-2px">Mengapa memilih akuntansi perpajakan?</h3>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-1 justify-content-center mb-5" data-anime='{ "el": "childs", "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                        <div class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                            <div class="feature-box-icon"> 
                                <a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon01.svg" class="h-95px" alt=""></a>
                            </div>
                            <div class="feature-box-content">
                                <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Peluang Karir Luas</a>
                                <p class="mb-30px ls-minus-05px">Lulusan dibutuhkan di kantor pajak, perusahaan, hingga konsultan keuangan.</p>
                            </div>                        
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                        <div class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                            <div class="feature-box-icon"> 
                                <a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon02.svg" class="h-95px" alt=""></a>
                            </div>
                            <div class="feature-box-content">
                                <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Prospek Kerja</a>
                                <p class="mb-30px">Belajar akuntansi dan perpajakan yang langsung digunakan di dunia kerja.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all">
                        <div class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                            <div class="feature-box-icon"> 
                                <a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon03.svg" class="h-95px" alt=""></a>
                            </div>
                            <div class="feature-box-content">
                                <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Profesi Stabil dan Dibutuhkan</a>
                                <p class="mb-30px">Selalu ada kebutuhan akan tenaga ahli di bidang perpajakan dan akuntansi.</p>
                            </div>                        
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pt-0 big-section">
            <div class="container">
                <div class="row align-items-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                    <div class="col-lg-6 position-relative md-mb-14 sm-mb-17 xs-mb-23"> 
                        <div class="w-70 md-w-75 xs-w-90" data-animation-delay="50" data-shadow-animation="true">
                            <img src="{{ asset('images/gambar/hero.jpg') }}" alt="" class="border-radius-8px w-100">
                        </div>
                        {{-- Tambahkan Gambar hero dan small hero dibackend --}}
                        {{-- <div class="w-70 md-w-75 xs-w-90" data-animation-delay="50" data-shadow-animation="true">
                            <img src="{{ asset('images/gambar/hero.jpg') }}" alt="" class="border-radius-8px w-100">
                        </div> --}}
                        {{-- <div class="w-55 overflow-hidden position-absolute right-15px xs-w-60 bottom-minus-20px" data-shadow-animation="true" data-animation-delay="250" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                            <img src="{{ asset('images/gambar/small-hero.jpg') }}" alt="" class="border-radius-8px w-100 box-shadow-quadruple-large" />
                        </div> --}}
                        <div class="w-55 overflow-hidden position-absolute right-15px xs-w-60 bottom-minus-20px" data-shadow-animation="true" data-animation-delay="250" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                            <img src="{{ asset('images/gambar/small-hero.jpg') }}" alt="" class="border-radius-8px w-100 box-shadow-quadruple-large" />
                        </div>
                    </div> 
                    <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                        <h3 class="fw-700 text-dark-gray ls-minus-2px">Apa Sih Akuntansi Perpajakan Itu?</h3>
                        {{-- @if ($tentang && $tentang->deskripsi)
                        <p class="mb-40px xs-mb-30px w-90 lg-w-95 md-w-100">{!! $tentang->deskripsi !!}</p>     
                        @endif  --}}
                        <p class="mb-40px xs-mb-30px w-90 lg-w-95 md-w-100">Akuntansi Perpajakan itu jurusan buat kamu yang pengen jago ngatur duit dan ngerti dunia pajak dari A sampai Z. Di sini kamu bakal belajar gimana cara nyusun laporan keuangan yang rapi, ngitung pajak perusahaan, sampai ngerti aturan perpajakan di Indonesia. Cocok banget buat kamu yang pengen kerja di kantor pajak, perusahaan, atau bahkan buka jasa konsultan sendiri. Keren, kan?</p> 
                        {{-- <div class="row align-items-center mb-30px justify-content-center justify-content-lg-start">
                            <!-- Mahasiswa Aktif -->
                            <div class="col-lg-5 col-md-4 col-sm-5 counter-style-04 mb-3">
                                <h3 class="vertical-counter d-inline-flex fw-700 text-dark-gray mb-0" data-text="+" data-to="60">
                                    <sup class="text-yellow me-2"><i class="feather icon-feather-users"></i></sup>
                                </h3>
                                <span class="fw-500 text-dark-gray d-block">Mahasiswa Aktif</span>
                            </div>
                        
                            <!-- Alumni Bekerja -->
                            <div class="col-lg-6 col-md-4 col-sm-5 counter-style-04 mb-3">
                                <h3 class="vertical-counter d-inline-flex fw-700 text-dark-gray mb-0" data-text="+" data-to="30">
                                    <sup class="text-yellow me-2"><i class="feather icon-feather-briefcase"></i></sup>
                                </h3>
                                <span class="fw-500 text-dark-gray d-block">Alumni di Bidang Pajak</span>
                            </div>
                        </div> --}}
                        <a href="#" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow">
                            Selengkapnya
                            <span class="bg-orient-blue text-white">
                                <i class="feather icon-feather-arrow-right icon-small"></i>
                            </span>
                        </a>                        
                    </div> 
                </div> 
            </div>
        </section>  
        <!-- end section -->
        <!-- start section --> 
        <section class="p-0 bg-base-color">
            <div class="container">
                <div class="row align-items-center justify-content-center g-0">
                    <div class="col-auto d-flex align-items-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <img src="https://via.placeholder.com/130x100" alt="" />
                        <div class="fs-19 lh-28 last-paragraph-no-margin text-white pt-15px pb-15px">
                            <p>Tertarik untuk bergabung bersama kami? <a href="demo-accounting-contact.html" class="text-decoration-line-bottom fw-500 text-white">Daftar Sekarang!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section --> 
        <section class="bg-very-light-gray overflow-hidden cover-background position-relative overlap-height" style="background-image: url(https://via.placeholder.com/1920x776)">
            <div class="container overlap-gap-section">
                <div class="row align-items-center justify-content-center mb-7"> 
                    <div class="col-xl-5 col-lg-6 mb-30px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="text-dark-gray fw-700 ls-minus-2px mb-50px">Visi, Misi, dan Tujuan</h3>
                        <div class="row row-cols-1">
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                            <span class="number position-relative z-index-1 text-dark-gray fw-600"><i class="bi bi-binoculars fs-16"></i></span>
                                            <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                        </div> 
                                        <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                    </div>
                                    <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-40px">
                                        <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">Visi</span>
                                        {{-- @if ($visiMisiTujuan && $visiMisiTujuan->visi)
                                        <p class="w-90 sm-w-100">{!! $visiMisiTujuan->visi !!}</p> 
                                        @endif --}}
                                        <p class="w-90 sm-w-100">Menjadi Program Studi unggulan dalam bidang akuntansi dan perpajakan yang profesional, berintegritas, dan adaptif terhadap perkembangan teknologi serta kebutuhan dunia kerja di tingkat nasional.</p>
                                    </div>
                                </div> 
                            </div>
                            <!-- end process step item --> 
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                            <span class="number position-relative z-index-1 text-dark-gray fw-600"><i class="bi bi-flag fs-16"></i></span>
                                            <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                        </div> 
                                        <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                    </div>
                                    <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-40px">
                                        <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">Misi</span>
                                        {{-- @if ($visiMisiTujuan->misi)
                                        <p class="w-90 sm-w-100">{!! $visiMisiTujuan->misi !!}</p>
                                        @endif --}}
                                        <p class="w-90 sm-w-100">Menyelenggarakan pendidikan di bidang akuntansi dan perpajakan yang berbasis kompetensi dan teknologi terkini.</p>
                                    </div>
                                </div> 
                            </div>
                            <!-- end process step item --> 
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                            <span class="number position-relative z-index-1 text-dark-gray fw-600"><i class="bi bi-trophy fs-16"></i></span>
                                            <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                        </div>
                                    </div>
                                    <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-30px">
                                        <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">Tujuan</span>
                                        {{-- @if ($visiMisiTujuan->tujuan)
                                        <p class="w-90 sm-w-100">{!! $visiMisiTujuan->tujuan !!}</p>
                                        @endif --}}
                                        <p class="w-90 sm-w-100">Mendorong terciptanya inovasi dan solusi praktis melalui kegiatan penelitian dan pengabdian masyarakat.</p>
                                    </div>
                                </div> 
                            </div>
                            <!-- end process step item --> 
                        </div>  
                    </div>
                    {{-- Tambahkan foto untuk hero dibackend --}}
                    <div class="col-lg-6 text-center md-mb-20px offset-xl-1 tw-hidden lg:tw-block"> 
                        <figure class="position-relative mb-0 overflow-hidden" data-shadow-animation="true" data-bottom-top="transform: translateY(70px)" data-top-bottom="transform: translateY(-70px)"> 
                            <img src="{{ asset('images/gambar/hero.jpg') }}" class="w-100 border-radius-6px" alt=""> 
                        </figure>
                    </div>
                    <a href="#" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow">
                        Selengkapnya
                        <span class="bg-orient-blue text-white">
                            <i class="feather icon-feather-arrow-right icon-small"></i>
                        </span>
                    </a>  
                </div>
            </div>
        </section>
        <!-- end section -->
        {{-- start section --}}
        <section class="pt-0 big-section tw-my-20">
            <div class="container">
                <div class="row align-items-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                    <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                        <h3 class="fw-700 text-dark-gray ls-minus-2px">Kata Sambutan</h3>
                        {{-- @if ($pimpinanStaff && $pimpinanStaff->kata_sambutan)
                        <div class="tw-space-y-4 tw-text-justify tw-text-base tw-leading-relaxed tw-w-90 lg:tw-w-95 md:tw-w-full">
                            <p>{!! $pimpinanStaff->kata_sambutan !!}</p>
                            <p class="tw-font-semibold tw-mt-6">{{ $pimpinanStaff->nama }}, {{ $pimpinanStaff->status }}</p>
                        </div>      
                        @endif--}}
                        <div class="tw-space-y-4 tw-text-justify tw-text-base tw-leading-relaxed tw-w-90 lg:tw-w-95 md:tw-w-full">
                            <p>Selamat datang di website resmi Program Studi Akuntansi Perpajakan. Website ini kami hadirkan sebagai media informasi dan komunikasi yang memuat berbagai hal terkait aktivitas akademik, program unggulan, serta capaian prestasi dari mahasiswa maupun dosen kami.</p>
                            <p>Program Studi Akuntansi Perpajakan hadir sebagai jawaban atas kebutuhan dunia kerja terhadap tenaga profesional yang memiliki kompetensi di bidang akuntansi dan perpajakan. Melalui kurikulum yang adaptif dan pembelajaran berbasis praktik, kami berkomitmen mencetak lulusan yang tidak hanya cakap secara akademik, namun juga siap bersaing secara profesional di era industri 4.0.</p>
                        </div>                     
                    </div>
                    <div class="col-lg-6 position-relative md-my-14 sm-my-17 xs-my-23">
                        {{-- @if ($pimpinanStaff && $pimpinanStaff->foto)
                        <div class="w-70 md-w-75 xs-w-90 md:tw-ml-32 tw-my-10 tw-ml-6" data-animation-delay="50" data-shadow-animation="true">
                            <img src="{{ asset('storage/' . $pimpinanStaff->foto) }}" alt="" class=" border-radius-8px w-100">
                        </div>
                        @endif --}}
                        <div class="w-70 md-w-75 xs-w-90 md:tw-ml-32 tw-my-10 tw-ml-6" data-animation-delay="50" data-shadow-animation="true">
                            <img src="{{ asset('images/gambar/alumni2.jpg') }}" alt="" class=" border-radius-8px w-100">
                        </div>
                    </div> 
                    <a href="#" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow tw-mt-10 lg:tw-ml-[7rem]">
                        Selengkapnya
                        <span class="bg-orient-blue text-white">
                            <i class="feather icon-feather-arrow-right icon-small"></i>
                        </span>
                    </a>   
                </div> 
            </div>
        </section>  
        {{-- end section  --}}
        <!-- start section --> 
        <section class="pt-md-0">
            <div class="container overlap-section md:!tw-mt-0">
                <div class="row m-0 align-items-center justify-content-center bg-white border-radius-100px md-border-radius-6px ps-10px pe-10px box-shadow-quadruple-large appear anime-complete" data-anime='{ "scale": [1.1, 1], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>                    
                    <div class="col-lg-10">
                        <div class="swiper slider-one-slide testimonials-style-09" data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start text slider item -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center pt-25px pb-25px"> 
                                        <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                            <img src="{{asset('images/gambar/alumni2.jpg')}}" class="rounded-circle w-100px h-100px md-mb-35px tw-mx-auto" alt="">  
                                            <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative"><img src="images/demo-accounting-home-quote-img.png" class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto" alt="">“Saya bangga menjadi bagian dari alumni prodi ini. Selain ilmu akuntansi yang kuat, saya juga dibekali pemahaman perpajakan yang sangat relevan dengan kebutuhan industri saat ini.”</span>
                                        </div>
                                        <div class="col-lg-1 d-none d-lg-inline-block">
                                            <div class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto"></div>
                                        </div>
                                        <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                            <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28">Widianto</span>
                                            <div>Financial manager</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                                <div class="swiper-slide">
                                    <div class="row align-items-center pt-25px pb-25px"> 
                                        <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start"> 
                                            <img src="{{asset('images/gambar/alumni2.jpg')}}" class="rounded-circle w-100px h-100px md-mb-35px tw-mx-auto" alt="">
                                            <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative"><img src="images/demo-accounting-home-quote-img.png" class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto" alt="">“Selama kuliah, saya mendapatkan pengalaman belajar yang sangat lengkap — mulai dari teori, praktik, hingga pelatihan software perpajakan. Ini sangat membantu saya dalam proses seleksi CPNS.</span>
                                        </div>
                                        <div class="col-lg-1 d-none d-lg-inline-block">
                                            <div class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto"></div>
                                        </div>
                                        <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                            <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28">Fahrezzi Arsyad</span>
                                            <div>Financial manager</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                                <!-- end text slider item -->
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-2 md-mb-25px">
                        <div class="d-flex justify-content-center">
                            <!-- start slider navigation -->
                            <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-very-light-gray"><i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i></div>
                            <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-very-light-gray"><i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i></div>
                            <!-- end slider navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="py-0">
            <div class="container">        
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-6 col-md-7 col-sm-8 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h3 class="fw-700 text-dark-gray ls-minus-2px">Berita Terkini</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <li class="grid-sizer"></li>
                            <!-- start blog list -->
                        {{-- @foreach ($publikasi->where('status', 'Berita')->sortByDesc('waktu')->take(3) as $item)
                        <li class="grid-item">
                            <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                <div class="blog-image" style="height: 200px; overflow: hidden;">
                                    @if ($item->gambar)
                                    <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" class="d-block">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                    </a>
                                    @endif
                                </div>
                                <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; padding-bottom: 0;">
                                    @if ($item->judul)
                                    <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" 
                                    class="card-title mb-3 fw-600 fs-20 text-dark-gray d-inline-block" 
                                    style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                        {!! Str::limit($item->judul, 90) !!}
                                    </a>
                                    @endif
                                    @if ($item->deskripsi)
                                    <p style="margin-top: 5px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                        {!! Str::limit($item->deskripsi, 120) !!}
                                    </p>
                                    @endif
                                    <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                        <div class="me-auto">
                                            @if ($item->waktu)
                                            <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                {{ \Carbon\Carbon::parse($item->waktu)->translatedFormat('d F Y') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                            <li class="grid-item">
                                <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="blog-image" style="height: 200px; overflow: hidden;">
                                        <a href="#" class="d-block">
                                            <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                        </a>
                                    </div>
                                    <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                        <a href="#" 
                                        class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                        style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                        </a>
                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                        </p>
                                        <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                            <div class="me-auto">
                                                <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                    15 Maret 2025
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog list -->
                            <li class="grid-item">
                                <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="blog-image" style="height: 200px; overflow: hidden;">
                                        <a href="#" class="d-block">
                                            <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                        </a>
                                    </div>
                                    <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                        <a href="#" 
                                        class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                        style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                        </a>
                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                        </p>
                                        <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                            <div class="me-auto">
                                                <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                    15 Maret 2025
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog list -->
                            <li class="grid-item">
                                <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="blog-image" style="height: 200px; overflow: hidden;">
                                        <a href="#" class="d-block">
                                            <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                        </a>
                                    </div>
                                    <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                        <a href="#" 
                                        class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                        style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                        </a>
                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                        </p>
                                        <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                            <div class="me-auto">
                                                <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                    15 Maret 2025
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog list -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection