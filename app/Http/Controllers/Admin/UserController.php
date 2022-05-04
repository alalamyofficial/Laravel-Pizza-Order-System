<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function users(){

        $users = User::latest()->get();

        if(Auth::user()->role_as == 1){
            return view('admin.users.index',compact('users'));
        }else{
            abort(404);
        }    

    }
}
