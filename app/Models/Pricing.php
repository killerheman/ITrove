<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'fa_icon', 'pic', 'slug', 'sequence', 
        'meta_title', 'meta_keyword', 'meta_description', 'full_description', 'status'
    ];
}
