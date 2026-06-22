<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appKeterampilan extends Model
{
    // nama tabel di database
    protected $table = 'app_keterampilan';

    // boleh diisi pakai create() atau save()
    protected $fillable = [
        'nama_keterampilan',
        'nilai',
        'flag',
    ];
}
