<?php

namespace App\Http\Controllers;


use App\Models\City;
use App\Models\HikeType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $city = City::get();
        $type = HikeType::get();
        return view('home',[
            'city' => $city,
            'type' => $type
        ]);

    }



}
