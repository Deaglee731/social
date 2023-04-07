<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $casts = [
        'names' => 'array',
        'rating' => 'array',
        'votes' => 'array',
        'logo' => 'array',
        'poster' => 'array',
        'videos' => 'array',
        'countries' => 'array',
        'persons' => 'array',
        'premier' => 'array',
    ];

    protected $fillable = [
        'name',
        'alternative_name',
        'en_name',
        'names',
        'year',
        'description',
        'short_description',
        'slogan',
        'status',
        'movie_length',
        'names',
        'rating',
        'votes',
        'logo',
        'poster',
        'videos',
        'countries',
        'persons'.
        'premier',
    ];

}
