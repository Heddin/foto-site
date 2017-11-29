<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'name_ru',
        'name_en',
        'category_id',
        'cover_img',
        'ru_description',
        'en_description',
    ];
}
