<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    
    public function index()
    {
        $suggestionsUsers = User::wherestatus(0)->get();  // suggestions users
        $RequestUsers = User::wherestatus(1)->get();   //req users
        $ReceviedUsers = User::wherestatus(2)->get();   //recevied users
        $ConnectionsUsers = User::wherestatus(3)->get();   // connection users
        return view('home',compact('suggestionsUsers','RequestUsers','ReceviedUsers','ConnectionsUsers'));
    }


    public function connection(Request $request)
    {
        $ID = $request->id;
        $users = User::where('id', $ID)->first();
        $users->status = 3;
        $users->save();
        return redirect('/'); 
    }

    // withdraw_request
    public function withdraw_request(Request $request)
    {
        $ID = $request->id;
        $users = User::where('id', $ID)->first();
        $users->status = 2;
        $users->save();
        return redirect('/'); 
    }
  
}
