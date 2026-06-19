<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appTeks extends Model
{
    // nama tabel di database
    protected $table = 'app_teks';

    // boleh diisi pakai create() atau save()
    protected $fillable = [
        'name',
        'content',
    ];
}
