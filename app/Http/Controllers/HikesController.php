<?php

namespace App\Http\Controllers;

use App\Models\Article_theme;
use App\Models\City;
use App\Models\Hike;
use App\Models\Hike_reviews;
use App\Models\hike_type;
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
    public function createHike()
    {
        $city = City::get();
        $type = hike_type::get();
        return view('createHike',[
            'city' => $city,
            'type' => $type,
        ]);
    }
    public function newHike(Request $request)
    {
        $current_user = $request->user();


        $hike=Hike::create([
            'type_id'  =>$request->type_id,
            'city_id' =>$request->city_id,
            'name'   =>$request->name,
            'difficulty'   =>$request->difficulty,
            'startDate'   =>$request->startDate,
            'endDate'   =>$request->endDate,
            'info'   =>$request->info,
            'food'   =>$request->food,
            'equipment'   =>$request->equipment,
            'route'   =>$request->route,
            'mileage'   =>$request->mileage
        ]);
        if ($request->hasFile('img')) {
            $destinationPath = storage_path('app/public/img/hikes/');
            $fileName = $hike->id.'.jpg';
            $request->file('img')->move($destinationPath, $fileName);
            $hike->img = $fileName;
            $hike->save();
        }

        $hike->users()->create([
           'hike_id'=>$hike->id,
            'user_id'=>$current_user->id,
            'role'=>'Создатель'
        ]);



        return redirect()->action([UserController::class,'user'], ['id' => $current_user ]);

    }
}
