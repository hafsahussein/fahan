<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function sendMail (Request $request){
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message
        ];
        Mail::to('hafsahussein60@gmail.com')->send(new ContactMail($data));
    }
}
