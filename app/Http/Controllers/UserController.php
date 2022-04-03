<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user($id)
    {
//        return view('profile',['data'=>User::all()->find($id)],['dataOrder'=>Order::all()->find($id)]);
        $data= User::all()->find($id);
    }
}
