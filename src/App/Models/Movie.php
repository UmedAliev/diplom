<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $fillable = [
        'title',
        'description',
        'main_picture',
        'media',
        'media_path',
        'created_by_id',
        'update_by_id',
        'category_id'

    ];
//    protected $guarded =[
//        'created_at,'
//        'updated_at'
//    ];
}
