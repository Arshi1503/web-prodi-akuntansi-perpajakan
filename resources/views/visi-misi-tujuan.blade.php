@extends('layouts.app')
@section('title', 'Visi, Misi, dan Tujuan')

@section('content')
        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background" style="background-image: url({{ asset('/images/gambar/foto-tentang.jpg') }})">
            <div class="container">
                <div class="row extra-very-small-screen align-items-center">
                    <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Tentang</h1>
                        <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Visi, Misi, dan Tujuan</h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content Section -->
        <section>
            <div class="container tw-space-y-10">
                <!-- Visi -->
                <div class="tw-bg-white tw-border-l-[6px] tw-border-primary tw-p-8 tw-rounded-xl tw-shadow">
                    <h2 class="tw-text-2xl tw-font-bold tw-text-primary tw-mb-4">Visi</h2>
                    @if ($visiMisiTujuan && $visiMisiTujuan->visi)
                        <span class="tw-space-y-2 tw-text-gray-800">
                            {!! $visiMisiTujuan->visi !!}
                        </span>
                    @endif
                </div>
            
                <!-- Misi (Fixed Section) -->
                <div class="tw-bg-white tw-border-l-[6px] tw-border-primary tw-p-8 tw-rounded-xl tw-shadow">
                    <h2 class="tw-text-2xl tw-font-bold tw-text-primary tw-mb-4">Misi</h2>
                    @if($visiMisiTujuan && $visiMisiTujuan->misi)
                    <span class="tw-space-y-2 tw-text-gray-800">
                        {!! $visiMisiTujuan->misi !!}  
                    </span>
                    @endif
                   
                    {{-- <ul class="tw-list-disc tw-pl-6 !tw-list-outside tw-space-y-2 tw-text-gray-800 [&::marker]:tw-text-gray-600">
                        @foreach ($visiMisiTujuan as $item )
                        <li><span class="tw-mr-2">1.</span>Menyelenggarakan pendidikan berkualitas di bidang akuntansi dan perpajakan.</li>
                        <li><span class="tw-mr-2">2.</span>Mendorong riset yang relevan dengan kebutuhan industri.</li>
                        <li><span class="tw-mr-2">3.</span>Menjalin kemitraan strategis dengan instansi pemerintah dan swasta.</li>
                        <li><span class="tw-mr-2">4.</span>Mengembangkan kompetensi lulusan yang adaptif dan profesional.</li>
                        @endforeach
                    </ul> --}}
                </div>
            
                <!-- Tujuan -->
                <div class="tw-bg-white tw-border-l-[6px] tw-border-primary tw-p-8 tw-rounded-xl tw-shadow">
                    <h2 class="tw-text-2xl tw-font-bold tw-text-primary tw-mb-4">Tujuan</h2>
                    @if($visiMisiTujuan && $visiMisiTujuan->tujuan)
                    <span class="tw-space-y-2 tw-text-gray-800">
                        {!! $visiMisiTujuan->tujuan !!}  
                    </span>
                    @endif
                </div>
            </div>
        </section>
        
@endsection