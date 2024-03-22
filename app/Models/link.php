<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    
    protected $fillable = ['Title', 'Link', 'Thumbnail'];
    
    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            if ($model->isDirty('Thumbnail') && ($model->getOriginal('Thumbnail') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('Thumbnail'));
            }
        });
    }
}
