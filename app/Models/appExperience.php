<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appExperience extends Model
{
    // nama tabel di database
    protected $table = 'app_experience';

    // boleh diisi pakai create() atau save()
    protected $fillable = [
        'name',
        'description',
        'start_year',
        'end_year',
    ];
}
