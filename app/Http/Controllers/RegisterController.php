<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('login.register');
    }

    
    public function store(RegisterRequest $request)
    {
        $check = Account::where('email',$request->email)->exists();
        if($check){
            return back()->with([
                'message'=>'Email already exists'
            ]);
        }
        else{
            $data = [
                'ten'=>$request->name,
                'email'=>$request->email,
                'password'=> Hash::make($request->password)
            ];
            $User = Account::create($data);
            return redirect()->route('login.index')->with(
                [
                    'message'=>'Register success!'
                ]
                );
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
