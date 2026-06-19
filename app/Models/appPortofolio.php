<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appProject extends Model
{
    // nama tabel di database
    protected $table = 'app_portofolio';

    // boleh diisi pakai create() atau save()
    protected $fillable = [
        'id_kategori',
        'nama',
        'gambar',
    ];
}
