<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name_ru',
        'name_en',
        'ru_description',
        'en_description',
    ];

    public function albums(){
        return $this->hasMany(Album::class);
    }
    public function photos(){
        return $this->hasManyThrough(Photo::class,Album::class);
    }
}
