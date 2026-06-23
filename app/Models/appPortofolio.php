<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appPortofolio extends Model
{
    // nama tabel di database
    protected $table = 'app_portofolio';

    // boleh diisi pakai create() atau save()
    protected $fillable = [
        'id_kategori',
        'nama',
        'gambar',
    ];

        public function kategori()
    {
        return $this->belongsTo(appPortofolioKategori::class, 'id_kategori');
    }
}
