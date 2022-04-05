<?php

namespace App\Http\Controllers\Admin;

use App\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function mails(){

        $mails = Mail::latest()->get();
        return view('admin.mails.index',compact('mails'));
    }

    public function destroy($id){

        $mail = Mail::find($id);
        $mail->destroy($id);
        return back();

    }
}
