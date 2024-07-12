<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class DashboardAccountController extends Controller
{
    public function index(){
        $account = Account::all();
        
        return view('admin.account_client.index',compact('account'));
    }
    public function destroy(string $id){
        Account::where('id',$id)->delete();
        return back();
    }
}
