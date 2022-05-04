<?php

namespace App\Http\Controllers\Admin;

use App\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    public function mails(){

        $mails = Mail::latest()->get();

        if(Auth::user()->role_as == 1){
            return view('admin.mails.index',compact('mails'));
        }else{
            abort(404);
        }    
    }

    public function destroy($id){

        $mail = Mail::find($id);

        if(Auth::user()->role_as == 1){
            $mail->destroy($id);
        }else{
            abort(404);
        }    
        return back();

    }
}
