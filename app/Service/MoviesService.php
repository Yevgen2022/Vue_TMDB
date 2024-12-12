<?php

namespace App\Service;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MoviesService
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = env('TMDB_API_KEY');
        $this->baseUrl = env('TMDB_BASE_URL');
    }

    public function getPopularMovies(): array
    {
//        $apiKey = env('TMDB_API_KEY');
//        $baseUrl = env('TMDB_BASE_URL'); // Використовуємо дефолтне значення

        $response = Http::get("{$this->baseUrl}/movie/popular", [
            'api_key' => $this->apiKey,
            'language' => 'en-US',
        ]);

        if ($response->successful()) {

            // Log::info(json_decode($response->body(), true));
            return $response->json();
        } else {
            return ['error' => 'Unable to fetch data from TMDB'];
        }
    }
}
