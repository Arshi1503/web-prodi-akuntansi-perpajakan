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
                <div class="tw-relative tw-mb-10">
                    <div class="tw-absolute tw-inset-0 tw-rounded-2xl tw-border-[3px] tw-border-secondary tw-translate-x-2 tw-translate-y-2 tw-z-0 tw-bg-secondary"></div>
                    
                    <div class="tw-bg-white tw-shadow-xl tw-rounded-2xl tw-overflow-hidden tw-flex tw-flex-col md:tw-flex-row tw-relative tw-z-10">
                        <!-- Content kiri -->
                        <div class="tw-w-full md:tw-w-1/2 tw-p-6 tw-flex tw-flex-col tw-justify-center">
                            <h2 class="tw-text-3xl tw-font-bold tw-text-primary tw-mb-4">
                                Bagaimana Struktur Organisasi Prodi?
                            </h2>
                            {{-- @if ($strukturOrganisasi && $strukturOrganisasi->teks)
                            <p class="tw-text-base tw-text-gray-700">
                                {!! $strukturOrganisasi->teks !!}
                            </p> 
                            @endif --}}
                            <p class="tw-text-base tw-text-gray-700">
                                Program Studi Akuntansi Perpajakan mempersiapkan mahasiswa dengan kompetensi di bidang akuntansi dan perpajakan yang sesuai dengan kebutuhan dunia usaha dan industri.
                            </p>
                        </div>
                
                        <!-- Gambar kanan -->
                        <div class="tw-w-full md:tw-w-1/2">
                                <!-- Thumbnail Struktur -->
                            <div x-data="{ open: false }" class="tw-text-center">
                                {{-- @if ($strukturOrganisasi && $strukturOrganisasi->foto)
                                <img 
                                    src="{{ asset('storage/' . $strukturOrganisasi->foto) }}') }}" 
                                    alt="Struktur Organisasi"
                                    @click="open = true"
                                    class="tw-cursor-zoom-in tw-rounded-xl tw-shadow-md tw-max-w-full tw-mx-auto"
                                >   
                                @endif --}}
                                <img 
                                    src="{{ asset('images/gambar/small-hero.jpg') }}" 
                                    alt="Struktur Organisasi Besar"
                                    class="tw-w-full tw-rounded-lg"
                                >

                                <!-- Modal -->
                                <div 
                                    x-show="open" 
                                    @click.away="open = false" 
                                    class="tw-fixed tw-inset-0 tw-bg-black/70 tw-flex tw-items-center tw-justify-center tw-z-50"
                                >
                                    <div class="tw-bg-white tw-p-4 tw-rounded-xl tw-relative tw-max-w-4xl tw-w-full">
                                        <button 
                                            @click="open = false" 
                                            class="tw-absolute tw-top-4 tw-right-4 tw-bg-white tw-text-black tw-rounded-full tw-shadow-md tw-w-10 tw-h-10 tw-flex tw-items-center tw-justify-center hover:tw-text-red-500 tw-mt-3 tw-mr-3"
                                        >
                                            &times;
                                        </button>
                                        {{-- @if ($strukturOrganisasi && $strukturOrganisasi->foto)
                                        <img 
                                            src="{{ asset('storage/' . $strukturOrganisasi->foto) }}') }}" 
                                            alt="Struktur Organisasi Besar"
                                            class="tw-w-full tw-rounded-lg"
                                        >   
                                        @endif --}}
                                        <img 
                                            src="{{ asset('images/gambar/small-hero.jpg') }}" 
                                            alt="Struktur Organisasi Besar"
                                            class="tw-w-full tw-rounded-lg"
                                        >
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
                
            </div>
        </section>

@endsection