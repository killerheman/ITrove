<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Work extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($Work) {
            if (empty($Work->slug)) {
                $Work->slug = Str::slug($Work->slug);
            }
        });
    }
}
