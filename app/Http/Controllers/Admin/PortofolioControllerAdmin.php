<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortofolioControllerAdmin extends Controller
{
    public function index()
    {
        $portfolios = DB::table('app_portofolio')
            ->join('app_portofolio_kategori', 'app_portofolio.id_kategori', '=', 'app_portofolio_kategori.id')
            ->select('app_portofolio.*', 'app_portofolio_kategori.nama_kategori')
            ->orderBy('app_portofolio.id', 'desc')
            ->get();

        return view('dashboard', compact('portfolios'));    
    }
    public function destroy($id)
    {
        DB::table('app_portofolio')->where('id', $id)->delete();

        return redirect()->route('dashboard')->with('success', 'Portofolio berhasil dihapus!');
    }

    public function create()
    {
        $categories = DB::table('app_portofolio_kategori')->get();
        
        return view('CreatePortofolioAdmin', compact('categories')); 
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'id_kategori' => 'required|integer',
            'kilasan' => 'required|string',
        ]);
        \Illuminate\Support\Facades\DB::table('app_portofolio')->insert([
            'nama' => $request->nama,
            'id_kategori' => $request->id_kategori,
            'kilasan' => $request->kilasan,
            'gambar' => '',
            'tag' => '',
            'start_date' => 0,
            'id_author' => 0,
        ]);

        return redirect()->route('dashboard')->with('success', 'Portofolio baru berhasil ditambahkan!');
    }
}