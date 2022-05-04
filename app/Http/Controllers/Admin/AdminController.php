<?php

namespace App\Http\Controllers\Admin;

use App\Mail;
use App\Menu;
use App\User;
use App\Order;
use App\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){

        $menus = Menu::latest()->get();
        $orders = Order::latest()->get();
        $coupons = Coupon::latest()->get();
        $mails = Mail::latest()->get();

        if(Auth::user()->role_as == 1){
            return view('admin.dashboard',
            compact('menus','orders','coupons','mails'));
        }else{
            abort(404);
        }

    }
}
