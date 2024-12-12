<?php

namespace App\Http\Controllers;

use AllowDynamicProperties;
use App\Service\MoviesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

#[AllowDynamicProperties] class MoviesController extends Controller
{

    public function __construct(MoviesService $moviesService)
    {
        //$this->middleware('auth');
        $this->moviesService = $moviesService;
    }


    public function getPopular(): \Illuminate\Http\JsonResponse
    {
        return response()->json($this->moviesService->getPopularMovies());
    }

//    public function index()
//    {
//        return view('movies');
//    }

}
