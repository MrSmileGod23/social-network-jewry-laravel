<?php

namespace App\Http\Controllers;

use App\Models\Article_theme;
use App\Models\Hike;
use App\Models\Hike_reviews;
use App\Models\Hike_user;
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

    public function getHike ($id)
    {
        $hike= Hike::where('id',$id)->first();
        $themes = Article_theme::get();
        $users = Hike_user::where('hike_id',$id)->get();
        $reviews = Hike_reviews::get();
        $ldate = date('Y-m-d');
        return view('show-hike',[
            'hike' => $hike,
            'themes' => $themes,
            'users' => $users,
            'reviews' => $reviews,
            'ldate' => $ldate
        ]);
    }
}
