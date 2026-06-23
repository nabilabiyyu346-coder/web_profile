<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\appExperience;
use App\Models\appKeterampilan;
use App\Models\appPortofolio;
use App\Models\appPortofolioKategori;
use App\Models\appTeks;
use App\Models\appImage;
use App\Models\appSosialMedia;

class CvController extends Controller
{
    public function index()
    {
        // ambil semua data yang dibutuhin halaman CV
        $user = User::first();
        $experiences = appExperience::all();
        $keterampilan = appKeterampilan::all();
        $portofolio = appPortofolio::with('kategori')->get();
        $portofolioKategori = appPortofolioKategori::all();
        $teks = appTeks::all();
        $images = appImage::all();
        $sosmed = appSosialMedia::all();

        // kirim semua data ke view pages.CV
        return view('pages.CV', [
            'experiences' => $experiences,
            'keterampilan' => $keterampilan,
            'portofolio' => $portofolio,
            'portofolioKategori' => $portofolioKategori,
            'teks' => $teks,
            'images' => $images,
            'sosmed' => $sosmed,
            'user' => $user,
        ]);
    }
}
?>