<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appSkill extends Model
{
    // nama tabel di database
    protected $table = 'app_skills';

    // boleh diisi pakai create() atau save()
    protected $fillable = [
        'name',
        'description',
        'proficiency',
    ];
}
