<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotRequest;
use App\Models\Account;
use App\Models\PasswordReset;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotController extends Controller
{

    public function index()
    {
        return view('login.forgotpassword');
    }

    public function forgetPasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'bail|email|required|exists:users,email',
            'password' => 'bail|required|min:8',
            'password_comfirm' => 'bail|same:password'
        ]);
        $token = Str::random(64);

        // Tạo bản ghi trong bảng password_resets
        PasswordReset::create([
            "email" => $request->email,
            "token" => $token,
            "created_at" => Carbon::now()
        ]);
        Mail::send(
            'login.email.forgotemail',
            ['name' => $request->name, 'token' => $token, 'email' => $request->email],
            function ($message) use ($request) {
                $message->to($request->email)
                    ->subject('Password recovery email');
            }
        );

        return back()->with('success', 'Password recovery email has been sent.');
    }


    public function resetPassword($token, $email)
    {
        return view("login.reset.new-password", compact("token", "email"));
    }

    public function resetPasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'bail|email|required|exists:users,email',
            'password' => 'bail|required|min:8',
            'password_comfirm' => 'bail|same:password'
        ]);

        $password_reset = PasswordReset::where(
            [
                "email" => $request->email,
                "token" => $request->token,
            ]
        )->first();

        if (!$password_reset) {
            return redirect()->route("reset.password")->with("error", "Error");
        }

        $pass_hash = bcrypt($request->password);

        Account::where("email", $request->email)->update(["password" => $pass_hash]);

        PasswordReset::where("email", $request->email)->delete();

        return redirect()->route("login.index")->with("success", "Successfully");
    }
}
