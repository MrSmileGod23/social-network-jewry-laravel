<?php

namespace App\Http\Controllers;

use App\Models\Article_theme;
use App\Models\Hike;
use Illuminate\Http\Request;

class HikesController extends Controller
{
    public function allHikes ()
    {
        $hike= Hike::paginate(4);
        $themes = Article_theme::get();
        return view('hikes',[
            'hike' => $hike,
            'themes' => $themes
        ]);
    }


}
