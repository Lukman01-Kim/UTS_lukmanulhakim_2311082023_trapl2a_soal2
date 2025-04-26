<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ApiServices
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('4bd50fc67emsha69f3086f8c70ddp14faa8jsnbe81dc1f6fd2'); // Ambil API key dari file .env
    }

    // Fungsi untuk mendapatkan semua tim dari API Premier League
    public function getAllTeams()
    {
        try {
            $response = $this->client->request('GET', 'https://golf-leaderboard-data.p.rapidapi.com', [
                'headers' => [
                    'x-rapidapi-key' => $this->apiKey
                ],
                'verify' => false // Nonaktifkan verifikasi SSL (tidak disarankan untuk production)
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            return $data;

        } catch (RequestException $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
