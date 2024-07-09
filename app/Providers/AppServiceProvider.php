<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $client;
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://v3.football.api-sports.io/',
            'headers' => [
                'x-rapidapi-host' => 'v3.football.api-sports.io',
                'x-rapidapi-key' => env('API_FOOTBALL_KEY'),
                'Content-Type' => 'application/json',
            ],
        ]);
    }
    public function fetchData($endpoint, $params = [])
    {
        $response = $this->client->get($endpoint, ['query' => $params]);
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getTeams($params = ['league'=>39, 'season'=>2024])
    {
        return $this->fetchData('teams', $params);
    }
    public function getStandings($params = ['league'=>39, 'season'=>2024]){
        return $this->fetchData('standings', $params);
    }
}
