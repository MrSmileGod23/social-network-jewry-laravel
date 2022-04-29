<?php

namespace App\Http\Controllers;

use App\Models\ArticleTheme;
use App\Models\City;
use App\Models\Hike;
use App\Models\HikeReview;
use App\Models\HikeType;
use App\Models\HikeUser;
use Illuminate\Http\Request;

class HikeController extends Controller
{
    public function index ()
    {
        $hike= Hike::paginate(4);
        $themes = ArticleTheme::get();
        return view('hikes',[
            'hike' => $hike,
            'themes' => $themes
        ]);
    }

    public function show ($id)
    {
        $hike= Hike::where('id',$id)->first();
        $themes = ArticleTheme::get();
        $users = HikeUser::where('hike_id',$id)->get();
        $reviews = HikeReview::get();
        $ldate = date('Y-m-d');
        return view('show-hike',[
            'hike' => $hike,
            'themes' => $themes,
            'users' => $users,
            'reviews' => $reviews,
            'ldate' => $ldate
        ]);
    }
    public function new()
    {
        $city = City::get();
        $type = HikeType::get();
        return view('createHike',[
            'city' => $city,
            'type' => $type,
        ]);
    }
    public function create(Request $request)
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
