<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UpdateAccountRequest;
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

    public function login(LoginRequest $request)
    {


        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $remember = $request->rememberme;
        if (Auth::attempt($data, $remember)) {
            if (Auth::user()->role == '0') {
                return redirect()->route('client.index')->with('success','Logged in successfully');
            } else {
                return redirect()->route('dashboard.home')->with('success','Admin login successfully');
            }
        } else {
            return back()->with('error', 'Invalid email or password');
        }
    }
    public function info()
    {
        $user = Account::where('id', Auth::user()->id)->first();
        return view('login.user.info', compact('user'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index')->with('success', 'Logout Success!');
    }
    public function edit()
    {
        $user = Account::where('id', Auth::user()->id)->first();
        return view('login.user.myacc', compact('user'));
    }
    public function update(UpdateAccountRequest $request)
    {
        $user = Account::where('id', Auth::user()->id)->first();


        if ($request->filled('old_password')) {

            if (!Hash::check($request->old_password, $user->password)) {
                return back()->withErrors(['old_password' => 'Old password is incorrect.']);
            }


            $request->validate([
                'new_password' => 'required|min:8|confirmed',
            ]);


            $user->password = Hash::make($request->new_password);
        }


        $imagePath = $user->anh;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $file_name = time() . "." . $ext;
            $file->storeAs('public', $file_name);
            $imagePath = $file_name;
        }


        $user->update([
            'ten' => $request->name,
            'dia_chi' => $request->address,
            'anh' => $imagePath,
        ]);


        Mail::send('login.email.email', ['name'=>$request->name], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Password recovery email');
        });

        return redirect()->route('info')->with('success', 'Successfully');
    }
}
