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
        $data= User::all()->find($id);
        $hike= Hike_user::where('user_id',$id)->paginate(2);
        $current_user = $request->user();
        return view('profile',[
            'data' => $data,
            'hike' => $hike,
            'current_user' => $current_user
        ]);

    }

    public function editing($id,Request $request)
    {
        $data= User::all()->find($id);
        $current_user = $request->user();
        $city = City::get();
        return view('profile-editing',[
            'city' => $city,
            'data' => $data,
            'current_user' => $current_user
        ]);

    }

    public function updateUser(Request $request, User $User,$id){

        $User->where('id',$id)->update(['first_name'=>$request->first_name]);
        $User->where('id',$id)->update(['last_name'=>$request->last_name]);
        $User->where('id',$id)->update(['city_id'=>$request->city]);
        $User->where('id',$id)->update(['birth_date'=>$request->birth_date]);
        $User->where('id',$id)->update(['info'=>$request->info]);
        $User->where('id',$id)->update(['telephone'=>$request->telephone]);
        return redirect()->action([UserController::class,'user'], ['id' => $id ]);
    }

}
