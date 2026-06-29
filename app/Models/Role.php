<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    // nama tabel di database
    protected $table = 'roles';

    // boleh diisi pakai create() atau save()
    protected $fillable = [
        'name',
        'flag'
    ];
}
