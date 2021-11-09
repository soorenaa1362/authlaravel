<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $activeCode = rand(100000 , 999999);

        $user = User::create([
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
            'activeCode' => $activeCode
        ]);  
        session()->put('userId', $user->id);
        
        return view('activeUser');
    }


    public function active(Request $request)
    {
        $user_id = session()->get('userId');
        $user = User::find($user_id);
        if($user->activeCode = $request->activeCode){
            $user->update(['active'=>1]) ک   
        }
    }
}
