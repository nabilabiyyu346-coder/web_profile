<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appProjectKategori extends Model
{
    // nama tabel di database
    protected $table = 'app_portofolio_kategori';

    // boleh diisi pakai create() atau save()
    protected $fillable = [
        'name',
    ];
}
