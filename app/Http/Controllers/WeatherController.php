<?php

namespace App\Http\Controllers;

use App\Providers\HGWeatherServiceProvider;
use Illuminate\Http\Request;
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
        return view('weather');
    }

    public function post(Request $request)
    {
        $weather = null;

//        dd(rawurlencode($request->city));

        if(isset($request->city)) {
            $weather = HGWeatherServiceProvider::getWeatherbyCity($request->city);
        }

        return view('weather',compact('weather'));
    }

}
