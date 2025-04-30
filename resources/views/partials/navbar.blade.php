    <header class="header-with-topbar">
        <!-- start header top bar -->
        <div class="header-top-bar top-bar-dark bg-very-light-gray">
            <div class="tw-w-full tw-bg-[#005153] tw-shadow tw-pt-3 tw-pb-0.5 tw-px-6 tw-flex tw-justify-between tw-items-center tw-text-sm tw-font-medium tw-sticky tw-top-0">
  
                <!-- Kiri: Logo atau Judul -->
              
                <!-- Tengah: Menu Navigasi -->
                <div class="tw-hidden lg:tw-flex tw-gap-6">
                  <a href="https://siakad.iwu.ac.id/login/" class="tw-flex tw-text-base tw-text-gray-200 tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
                    <i class="bi bi-mortarboard"></i> Dashboard
                  </a>
                  <a href="https://siakad.iwu.ac.id/login/" class="tw-flex tw-text-base tw-text-gray-200 tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
                    <i class="bi bi-journal-bookmark"></i> LMS IWU
                  </a>
                  <a href="https://pmb.iwu.ac.id/" class="tw-flex tw-text-gray-200 tw-text-base tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
                    <i class="bi bi-book"></i> PMB IWU
                  </a>
                </div>
              
                <!-- Kanan: Pilihan Bahasa -->
                <div class="tw-hidden lg:tw-flex tw-gap-2">
                  <button class="tw-bg-[#005153] tw-px-3 tw-py-1 tw-rounded hover:tw-bg-[#196264] tw-text-gray-300 hover:tw-text-gray-100 transition">
                    <img src="{{asset ('images/gambar/idn-flag.png')}}" alt="" width="20">🇮🇩</button>
                  <button class="tw-bg-[#005153] tw-px-3 tw-py-1 tw-rounded hover:tw-bg-[#196264] tw-text-gray-300 hover:tw-text-gray-100 transition">
                    <img src="{{asset ('images/gambar/eng-flag.png')}}" alt="" width="20">🇺🇸</button>
                  <button class="tw-bg-[#005153] tw-px-3 tw-py-1 tw-rounded hover:tw-bg-[#196264] tw-text-gray-300 hover:tw-text-gray-100 transition">
                    <img src="{{asset ('images/gambar/kr-flag.png')}}" alt=" " width="20">🇰🇷</button>
                </div>
              
              </div>
              
        </div>
        <!-- end header top bar -->
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-light bg-transparent">
            <div class="container-fluid">
                <div class="col-auto col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="demo-accounting.html">
                        <img src="{{asset('images/gambar/logo.png')}}" alt="" class="default-logo">
                        <img src="{{asset('images/gambar/logo.png')}}" alt="" class="alt-logo tw-mx-auto tw-my-auto">
                        <img src="{{asset('images/gambar/logo.png')}}" alt="" class="mobile-logo tw-mx-auto tw-my-auto"> 
                    </a>
                </div>
                <div class="col-auto menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav"> 
                        <ul class="navbar-nav fw-600">
                            <li class="nav-item"><a href="demo-accounting-company.html" class="nav-link">Beranda</a></li>
                            <li class="nav-item dropdown dropdown-with-icon-style02">
                                <a href="demo-accounting-services.html" class="nav-link">Tentang Kami</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                    <li><a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon02.svg" alt="">Corporate finance</a></li>
                                    <li><a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon03.svg" alt="">Financial services</a></li>
                                    <li><a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon-04.svg" alt="">Online consulting</a></li>
                                    <li><a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon-05.svg" alt="">Investment consulting</a></li>
                                    <li><a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon-06.svg" alt="">Banking and financing</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="demo-accounting-process.html" class="nav-link">Akademik</a></li>
                            <li class="nav-item"><a href="demo-accounting-news.html" class="nav-link">Berita</a></li> 
                            <li class="nav-item"><a href="demo-accounting-contact.html" class="nav-link">Publikasi</a></li>
                            <li class="nav-item"><a href="demo-accounting-contact.html" class="nav-link">Daftar Sekarang</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-lg-2 text-end d-none d-sm-flex">  
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>