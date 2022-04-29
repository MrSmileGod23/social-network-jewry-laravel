<?php

namespace App\Http\Controllers;


use App\Models\City;
use App\Models\Hike;
use App\Models\HikeUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{




    public function show($id,Request $request)
    {
        $user= User::find($id);
        $hike= HikeUser::where('user_id',$id)->paginate(2);
        $current_user = $request->user();
        return view('profile',[
            'user' => $user,
            'hike' => $hike,
            'current_user' => $current_user
        ]);

    }

    public function edit(Request $request)
    {
        $current_user = $request->user();
        $city = City::get();
        return view('profile-editing',[
            'city' => $city,
            'user' => $current_user
        ]);

    }



    public function update(Request $request, User $id){

        $request->validate([
            'first_name' => 'regex:/^[а-яА-ЯA-Za-z\- ,]+$/u',
            'last_name' => 'regex:/^[а-яА-ЯA-Za-z\- ,]+$/u'
        ]);

        if ($request->hasFile('img')) {
            $destinationPath = storage_path('app/public/img/users/avatars/');
            $fileName = $id->id.'.jpg';
            $request->file('img')->move($destinationPath, $fileName);
            $id->update([
                'img' =>$fileName
            ]);
        }
        $id->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'city_id'=>$request->city,

            'birth_date'=>$request->birth_date,
            'info'=>$request->info,
            'telephone'=>$request->telephone
        ]);
        return redirect()->action([UserController::class,'user'], [$id->id]);
    }

}
