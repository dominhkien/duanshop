<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $data = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];
        $remember = $request->rememberme;
        if(Auth::attempt($data,$remember)){
            if(Auth::user()->role == '0'){
                return redirect()->route('client.index');
            }
            else{
                return redirect()->route('dashboard.index');
            }
        }
        else{
            return back()->with([
                'message'=>'Email or Password error!'
            ]);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.index')->with([
            'message'=>'Logout Success!'
        ]);
    }
    public function create(){
        $user = Account::where('id',Auth::user()->id)->first();
        return view('login.myacc',compact('user'));
    }
    public function store(Request $request){
        $user = Account::where('id',Auth::user()->id)->first();
        if ($request->hasFile("image")) {
            $file = $request->image;
            $ext = $file->getClientOriginalExtension();
            $file_name = time() . "." . $ext;
            $file->storeAs("public", $file_name);
            $data["image"] = $file_name;
        }
        else{
            $data['image']= $user->anh;
        }
        
        $data = [
            'ten'=>$request->name,
            'dia_chi'=>$request->address,
            'anh'=> $data["image"],
            'password'=>Hash::make($request->password)
        ];
        Mail::send('login.email',['newPassword'=>$request->password],function($massage)use($request){
            $massage->to($request->email);
            $massage->subject('Password recovery email');
        });
        $user->update($data);
        return back();

    }
}
