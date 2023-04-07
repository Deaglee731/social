<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Services\Converter\CaseConverterService;
use App\Services\Kinopoisk\KinopoiskService;
use Inertia\Inertia;

class KinoController extends Controller
{
    protected $kinopoiskservice;

    public function __construct(KinopoiskService $kinopoiskService)
    {
        $this->kinopoiskservice = $kinopoiskService;
    }

    public function index() {

    }

    public function random(CaseConverterService $caseConverter) {
        $fields = $this->kinopoiskservice->getRandomFilm();
        $snakeCaseFields = $caseConverter->camelToSnake($fields);

        $film = Film::create($snakeCaseFields);

        return Inertia::render('Films/ShowInfo', ['film' => $film]);
    }
}
