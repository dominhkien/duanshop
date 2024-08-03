<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotRequest;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class ForgotController extends Controller
{
    
    public function index()
    {
        return view('login.forgotpassword');
    }

   
    public function forgot(ForgotRequest $request)
    {
        $user = Account::where('email',$request->email)->first();
        if($user){
            $newPassword = Str::random(10);
            $user->password = Hash::make($newPassword);
            $user->save();
            Mail::send('login.email',['newPassword'=>$newPassword],function($massage)use($request){
                $massage->to($request->email);
                $massage->subject('Password recovery email');
                
            });
            return back();
        }
    }

    
}
