<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function ViewJournal(){
        return view('frontend.journal');
    }

}
