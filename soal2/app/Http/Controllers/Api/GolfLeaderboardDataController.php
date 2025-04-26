<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ApiServices;
use Illuminate\Http\Request;



class GolfLeaderboardDataController extends Controller
{
        protected $apiService;

        /**
         * Menambahkan dependensi PremierLeagueApiService melalui constructor
         */
        public function __construct(ApiServices $apiService)
        {
            $this->apiService = $apiService;
        }

        /**
         * Method untuk mendapatkan semua tim dari API dan mengembalikan sebagai response JSON
         */
        public function getAllTeams()
        {
            // Ambil data tim dari service
            $teams = $this->apiService->getAllTeams();

            // Kembalikan response dalam bentuk JSON
            return response()->json($teams);
        }

}