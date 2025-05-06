<header>
  <div class="header-top-bar top-bar-dark bg-very-light-gray">
      <div class="tw-w-full tw-bg-primary tw-shadow tw-pt-3 tw-pb-0.5 tw-px-6 tw-flex tw-justify-between tw-items-center tw-text-sm tw-font-medium tw-sticky tw-top-0">

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
            <button class="tw-bg-primary tw-px-3 tw-py-1 tw-rounded hover:tw-bg-secondary tw-text-gray-300 hover:tw-text-gray-100 transition">
              <img src="{{asset ('images/gambar/idn-flag.png')}}" alt="" width="20">🇮🇩</button>
            <button class="tw-bg-primary tw-px-3 tw-py-1 tw-rounded hover:tw-bg-secondary tw-text-gray-300 hover:tw-text-gray-100 transition">
              <img src="{{asset ('images/gambar/eng-flag.png')}}" alt="" width="20">🇺🇸</button>
            <button class="tw-bg-primary tw-px-3 tw-py-1 tw-rounded hover:tw-bg-secondary tw-text-gray-300 hover:tw-text-gray-100 transition">
              <img src="{{asset ('images/gambar/kr-flag.png')}}" alt=" " width="20">🇰🇷</button>
          </div>
        
        </div>
        
  </div> 
  <!-- start navigation -->
  <nav class="navbar navbar-expand-lg header-light bg-white disable-fixed">
      <div class="container-fluid">
          <div class="col-auto col-xl-3 col-lg-2 me-lg-0 me-auto">
              <a class="navbar-brand" href="demo-corporate.html">
                  <img src="{{asset('images/gambar/logo.png')}}" alt="" class="default-logo">
                  <img src="{{asset('images/gambar/logo.png')}}" alt="" class="alt-logo">
                  <img src="{{asset('images/gambar/logo.png')}}" alt="" class="mobile-logo"> 
              </a>
          </div>
          <div class="col-auto col-xl-6 col-lg-8 menu-order position-static">
              <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                  <span class="navbar-toggler-line"></span>
                  <span class="navbar-toggler-line"></span>
                  <span class="navbar-toggler-line"></span>
                  <span class="navbar-toggler-line"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNav"> 
                  <ul class="navbar-nav"> 
                      <li class="nav-item"><a href="/" class="nav-link">Beranda</a></li>
                      <li class="nav-item dropdown dropdown-with-icon-style02">
                          <a href="/tentang" class="nav-link">Tentang Kami</a>
                          <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                              <li><a href="/tentang"><i class="bi bi-coin"></i>Tentang Prodi</a></li>
                              <li><a href="/visi-misi-tujuan"><i class="bi bi-bullseye"></i>Visi, Misi dan Tujuan</a></li>
                              <li><a href="/struktur-organisasi"><i class="bi bi-diagram-3"></i>Struktur Organisasi</a></li>
                              <li><a href="/fasilitas"><i class="bi bi-building"></i>Fasilitas</a></li>
                              <li><a href="/dosen"><i class="bi bi-mortarboard"></i>Dosen</a></li>
                              <li><a href="/akreditasi"><i class="bi bi-check-circle"></i>Akreditasi</a></li>
                              <li><a href="/karir"><i class="bi bi-briefcase"></i>Karir</a></li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown dropdown-with-icon-style02">
                          <a href="/kurikulum" class="nav-link">Akademik</a>
                          <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                              <li><a href="/kurikulum"><i class="bi bi-journal-bookmark"></i>Kurikulum</a></li>
                              <li><a href="/profil-lulusan"><i class="bi bi-person-check"></i>Profil Lulusan</a></li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown dropdown-with-icon-style02">
                          <a href="/artikel" class="nav-link">Publikasi</a>
                          <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                              <li><a href="/artikel"><i class="bi bi-journal"></i>Artikel</a></li>
                              <li><a href="/berita"><i class="bi bi-newspaper"></i>Berita</a></li>
                              <li><a href="/kegiatan"><i class="bi bi-calendar"></i>Kegiatan</a></li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown dropdown-with-icon-style02">
                          <a href="https://pmb.iwu.ac.id/" class="nav-link">Daftar Sekarang!</a>
                          <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                              <li><a href="https://pmb.iwu.ac.id/"><i class="bi bi-pencil-square"></i>Pendaftaran</a></li>
                              <li><a href="/jadwal-penerimaan"><i class="bi bi-calendar-check"></i>Jadwal Penerimaan</a></li>
                              <li><a href="/persyaratan-masuk"><i class="bi bi-check-circle"></i>Persyaratan Masuk</a></li>
                          </ul>
                      </li> 
                  </ul>
              </div>
          </div>
          <div class="col-auto col-xl-3 col-lg-2 text-end md-pe-0">
              <div class="header-icon">
                  <div class="header-button ms-20px d-none d-xl-inline-block">
                      <a href="demo-corporate-contact.html" class="btn btn-rounded btn-transparent-light-gray border-1 btn-medium btn-switch-text text-transform-none">
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </nav>
  <!-- end navigation -->
</header>