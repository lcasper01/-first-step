<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
      return view('front.index', ['title' => 'Victoria',
                                  'titleName'=>'Главная'
                                  ]);

    }

    public function about(){
      return view('front.about');
    }

    public function contact(){
      return view('front.contact');
    }
}
