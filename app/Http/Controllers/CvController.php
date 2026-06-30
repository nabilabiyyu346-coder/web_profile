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
        $user = User::first();
        $experiences = appExperience::first();
        $keterampilan = appKeterampilan::first();
        $portofolio = appPortofolio::with('kategori')->first();
        $portofolioKategori = appPortofolioKategori::first();
        $teks = appTeks::first();
        $images = appImage::first();
        $sosmed = appSosialMedia::first();

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