<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;
use App\Models\VisiMisiTujuan;
use App\Models\PimpinanStaff;
use App\Models\Publikasi;
use App\Models\TestimoniAlumni;

class BerandaController extends Controller
{
    public function index()
    {
        $tentang = Tentang::first();
        $visiMisiTujuan = VisiMisiTujuan::first();
        $pimpinanStaff = PimpinanStaff::first();
        $publikasi = Publikasi::all();
        $testimoniAlumni= TestimoniAlumni::all();
        
        return view('home', compact('tentang', 'visiMisiTujuan', 'pimpinanStaff', 'publikasi', 'testimoniAlumni'));
    }
}