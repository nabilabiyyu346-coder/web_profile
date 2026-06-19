<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appSosialMedia extends Model
{
    // nama tabel di database
    protected $table = 'app_sosial_media';

    // boleh diisi pakai create() atau save()
    protected $fillable = [
        'name',
        'url',
    ];
}
