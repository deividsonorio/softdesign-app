<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class HGWeatherServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * @param string $city
     * @return string
     */
    public static function getWeatherbyCity(string $city): array
    {
        $url = config('app.hg_weather_api');

        $data = [
            'key' => config('app.hg_weather_api_key'),
            'city_name' => urlencode($city),
        ];

        $query = http_build_query($data);

        $urlApi = "$url?$query";

        $response = Http::get($urlApi);

        if($response->status() == "200") {
            return $response->json("results");
        }

//        $response = Http::get(env("HG_WEATHER_API"), [
//            'city_name' => 'Curitiba',
//        ]);

        return ['city' => $urlApi];
    }
}
