<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $fillable = [
        'title',
        'thumbnail',
        'content',
    ];

    protected static function boot()
    {
       parent::boot();
        static::updating(function ($model) {
            if ($model->isDirty('thumbnail') && $model->getOriginal('thumbnail') !== null) {
                \Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });
    }
}
