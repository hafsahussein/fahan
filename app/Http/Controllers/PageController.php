<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Matcher\Contains;

class PageController extends Controller
{
    //
    public function admin (){
        return redirect('/erayada');
    }
    public function index(){
        return redirect('/erayada');
    }
    public function contact(){
        return view('contact');
    }
}
