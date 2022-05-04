<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Mail;
use App\Menu;
use App\Order;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function site(){
        $plates = Menu::where('is_published',1)->latest()->take(6)->get();
        return view('site.main',compact('plates'));
    }

    public function menus(){
        $plates = Menu::where('is_published',1)->latest()->get();
        return view('site.menu.index',compact('plates'));
    }

    public function contact_us(){

        return view('site.contact_us');

    }

    public function send_mail(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $mail = Mail::create([

            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,

        ]);

        $mail->save();

        return back();
    }

    public function about(){
        return view('site.about');
    }

    
    public function blog(){
        $blogs = Blog::latest()->get();    
        return view('site.blog',compact('blogs'));
    }

    public function myOrders(){

        $orders = Order::where('user_id',request()->user()->id)->latest()->get();    
        return view('site.orders',compact('orders'));
    }
}
