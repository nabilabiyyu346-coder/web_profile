<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Keterampilan;
use App\Models\Portofolio;
use App\Models\Teks;
use App\Models\AppImage;
use App\Models\SosialMedia;

class ProfileController extends Controller
{
    public function index()
    {
        // ambil semua data yang dibutuhin halaman CV
        $experiences = appExperience::all();
        $keterampilan = appKeterampilan::all();
        $portofolio = appPortofolio::with('kategori')->get();
        $teks = appTeks::all();
        $images = appImage::all();
        $sosmed = appSosialMedia::all();

        // kirim semua data ke view pages.CV
        return view('pages.CV', [
            'experiences' => $experiences,
            'keterampilan' => $keterampilan,
            'portofolio' => $portofolio,
            'teks' => $teks,
            'images' => $images,
            'sosmed' => $sosmed,
        ]);
    }
}
?>