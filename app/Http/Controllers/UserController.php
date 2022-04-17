<?php

namespace App\Http\Controllers;


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
            'current' => $current_user
        ]);

    }
}
