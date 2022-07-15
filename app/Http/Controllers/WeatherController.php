<?php

namespace App\Http\Controllers;

use App\Providers\HGWeatherServiceProvider;
use http\Env\Request;
use Illuminate\View\View;

class WeatherController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Weather index.
     *
     * @return View
     */
    public function get(): View
    {
        $weather = HGWeatherServiceProvider::getWeatherbyCity("Curitiba");

        return view('weather',compact('weather'));
    }

    public function post(Request $request)
    {
        dd($request->all());

//        $weather = HGWeatherServiceProvider::getWeatherbyCity("Curitiba");
//
//        return view('weather',compact('weather'));
    }

}
