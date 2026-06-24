<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index()
    {
        $experiences = DB::table("app_experience")
            ->orderBy("start_year", "desc")
            ->get();
        $portfolios = DB::table("app_portofolio")
            ->join("app_portofolio_kategori", "app_portofolio.id_kategori", "=", "app_portofolio_kategori.id")
            ->select("app_portofolio.*", "app_portofolio_kategori.nama_kategori")
            ->orderBy("app_portofolio.id", "desc")
            ->take(6)
            ->get();
        $blogs = DB::table('blog_post')
            ->orderBy('id', 'desc')
            ->take(3)->get();

        return view('welcome', compact('experiences', 'portfolios', 'blogs'));
    }
}
