<?php

namespace App\Http\Controllers;


use App\Models\City;
use App\Models\hike_type;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function allData()
    {
        $city = City::get();
        $type = hike_type::get();
        return view('home',[
            'city' => $city,
            'type' => $type
        ]);

    }



}
