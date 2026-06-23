<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appPortofolioKategori extends Model
{
    // nama tabel di database
    protected $table = 'app_portofolio_kategori';

    // boleh diisi pakai create() atau save()
    protected $fillable = [
        'nama_kategori',
        'flag',
    ];
}
