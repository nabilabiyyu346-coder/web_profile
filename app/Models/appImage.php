<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appImage extends Model
{
    // nama tabel di database
    protected $table = 'app_image';

    // boleh diisi pakai create() atau save()
    protected $fillable = [
        'name',
        'url',
    ];
}
