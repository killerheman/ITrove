<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
class Blog extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];
    public static function boot()
    {
        parent::boot();
        static::saving(function ($Blog) {
            if (empty($Blog->slug)) {
                $Blog->slug = Str::slug($Blog->slug);
            }
        });
    }
    public function blogCategory(){
        return $this->belongsTo(BlogCategory::class , 'blog_category_id','id');
    }
}
