@extends('layouts.app')
@section('title', 'Tentang')

@section('content')
        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background" style="background-image: url({{ asset('/images/gambar/foto-tentang.jpg') }})">
            <div class="container">
                <div class="row extra-very-small-screen align-items-center">
                    <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Tentang</h1>
                        <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Struktur Organisasi</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Section -->
        <section class="tw-pt-16 tw-pb-20">
            <div class="container">
                <h2 class="tw-text-4xl tw-font-bold tw-text-primary tw-mb-10 tw-text-center">
                    Fasilitas Prodi Akuntansi Perpajakan
                </h2>
                <div class="tw-flex tw-flex-wrap tw-justify-start tw-flex-col tw-border-b-4 tw-border-secondary tw-overflow-hidden md:tw-flex-row tw-relative tw-p-2">
                    <div class="tw-w-full md:tw-w-1/2 tw-p-6 tw-flex tw-flex-col tw-justify-center">
                        <h2 class="tw-text-3xl tw-font-bold tw-text-primary tw-mb-4">
                            Kampus 1
                        </h2>
                        <p class="tw-text-base tw-text-gray-700">
                            Program Studi Akuntansi Perpajakan mempersiapkan mahasiswa dengan kompetensi di bidang akuntansi dan perpajakan yang sesuai dengan kebutuhan dunia usaha dan industri.
                        </p>
                    </div>
                    <div class="tw-full md:tw-w-1/2">
                        <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" class="tw-w-full tw-h-full tw-object-cover tw-rounded-xl">
                    </div>
                </div>

            </div>
        </section>        

@endsection