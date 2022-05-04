<?php

namespace App\Http\Controllers;

use App\User;
use App\Jobs\sendMails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role_as == 1){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect('/');
        }
    }

    public function sendMail(){

        $emails = User::select('email')->chunk(50,function($data){
            dispatch(new sendMails($data));
        });

        return 'Mail Send Successfully';
    }
}
