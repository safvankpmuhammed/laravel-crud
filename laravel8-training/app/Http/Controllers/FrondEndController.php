<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FrondEndController extends Controller
{
    public function homePage()
    {
        $name = 'safvan';
        $age = 30;
        $records = ['red','yellow','pink','green','blue'];
        $status = 3;
        $users = User::all();    // select * from users
        // return $users;
        // $user = User::find(43);     // select * from user where user_id=43
        $user = User::where('user_id',43)->first(); // select * from user where user_id=43
        // $users = User::whereIn('user_id',[43,23])->get(); // select * from user where user_id=[43,23]
        // $users = User::where('status',1)->get();
        $users = User::Active()->get();
        // return $users;
        // return $user->created_at->format('d-M-Y');
        return view('home',compact('name','age','records','status','users'));
    }
    
    public function aboutUs(){
        return view('aboutUs');
    }

    public function contactUs(){
        return view('contactUs');
    }
}
