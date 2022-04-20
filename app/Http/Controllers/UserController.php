<?php

namespace App\Http\Controllers;


use App\Models\City;
use App\Models\Hike;
use App\Models\Hike_user;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{




    public function user($id,Request $request)
    {
        $user= User::find($id);
        $hike= Hike_user::where('user_id',$id)->paginate(2);
        $current_user = $request->user();
        return view('profile',[
            'user' => $user,
            'hike' => $hike,
            'current_user' => $current_user
        ]);

    }

    public function editing($id,Request $request)
    {
        $user= User::find($id)->first();
        $current_user = $request->user();
        $city = City::get();
        return view('profile-editing',[
            'city' => $city,
            'user' => $user,
            'current_user' => $current_user
        ]);

    }

    public function updateUser(Request $request, User $id){
        $id->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'city_id'=>$request->city,
            'birth_date'=>$request->birth_date,
            'info'=>$request->info,
            'telephone'=>$request->telephone
        ]);
        return redirect()->action([UserController::class,'user'], [$id]);
    }

}
