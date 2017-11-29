<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'name_ru',
        'name_en',
        'category_id',
        'pre_img',
        'full_img',
        'ru_description',
        'en_description',
    ];
}
