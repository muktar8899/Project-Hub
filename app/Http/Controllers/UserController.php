<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function registration(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
         User::create($data);
		return redirect("/login");
    }
    public function login(Request $request){
        
        if((User::where('email', $request->email)->count())==0){
            return response()->json([
                'msg' => "Email doesn't exist!",
            ],422);
        }

         if((User::where('email', $request->email)->count())==0){
            return redirect("/login")->with('message',"Incorrect Email!");
        }
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password ])) {
           $user = Auth::user();
           if($user->user_type == 'User'){
            return redirect("/");
                // $url= URL::previous();
                //     return redirect($url);
            }
            if($user->user_type == 'Admin'){
                return redirect("/admin");
             }
             if($user->user_type == 'venueOwner'){
                return redirect("/");
             }
         }
         else{
            return  redirect("/login")->with('message',"Incorrect Password!");
         }

    }
}
