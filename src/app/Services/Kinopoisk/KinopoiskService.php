<?php

namespace App\Services\Kinopoisk;

use Illuminate\Support\Facades\Http;

class KinopoiskService
{
    public $key;
    public $url;

    public function __construct()
    {
        $this->key = config('kinopoisk.api_key');
        $this->url = config('kinopoisk.url');
    }

    public function getRandomFilm()
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-API-KEY' => $this->key
        ])->get($this->url."v1/movie/random");

        $body = $response->json();

        return $body;
    }
}
