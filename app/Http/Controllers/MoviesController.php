<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MoviesController extends Controller
{

//    public function __construct()
//    {
//        //$this->middleware('auth');
//    }


//    public function index()
//    {
//        return view('movies');
//    }

    public function getPopularMovies(): \Illuminate\Http\JsonResponse
    {

//        $response = Http::get(config('app.tmdb_base_url') . '/movie/popular', [
//            'api_key' => config('app.tmdb_api_key'),
//            'language' => 'en-US',
//        ]);

        $apiKey = '67d62e560168631aec9f199164512b42';

        // Виконання запиту до TMDB API
        $response = Http::get('https://api.themoviedb.org/3/movie/popular', [
            'api_key' => $apiKey,
            'language' => 'en-US',
        ]);


        // Логування відповіді для дебагу
  //      dd($response->json());
//        Log::info('TMDB Response:', $response->json());

        // Перевіряємо, чи вдалося отримати дані
        if ($response->successful()) {
            return response()->json($response->json());  // Повертаємо результат в JSON форматі
        } else {
            return response()->json(['error' => 'Unable to fetch data from TMDB'], 500);
        }
    }


}
