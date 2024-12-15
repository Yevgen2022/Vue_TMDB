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

    public function getPopularMovies($locale): array
    {

        $language = $this->getLanguageCode($locale);

        $response = Http::get("{$this->baseUrl}/movie/popular", [
            'api_key' => $this->apiKey,
            'language' => $language,
        ]);

        if ($response->successful()) {
            // Log::info(json_decode($response->body(), true));
            return $response->json();
        } else {
            return ['error' => 'Unable to fetch data from TMDB'];
        }
    }

    private function getLanguageCode($locale): string
    {
        // Можна створити логіку для перетворення локалі на код мови для TMDB (якщо необхідно)
        $languages = [
            'en' => 'en-US',
            'uk' => 'uk-UA',
            // додати інші мови за потреби
        ];

        return $languages[$locale] ?? 'en-US'; // за замовчуванням англійська
    }

}
