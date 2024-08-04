<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function create()
    {
        return view('login.register');
    }

    
    public function store(RegisterRequest $request)
    {
            $data = [
                'ten'=>$request->name,
                'email'=>$request->email,
                'password'=> Hash::make($request->password)
            ];
            $User = Account::create($data);
            Mail::send('login.email.welcome', ['name'=>$request->name,'password' => $request->password,'email'=>$request->email], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Password recovery email');
            });
            if($User){
                return redirect()->route('login.index')->with('success','Register success!');
            }
            else{
                return back()->with('error','Error');
            }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
