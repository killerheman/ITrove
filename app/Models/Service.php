<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($Service) {
            if (empty($Service->slug)) {
                $Service->slug = Str::slug($Service->slug);
            }
        });
    }
}
