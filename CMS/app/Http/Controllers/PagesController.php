<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function slider (){
        return view('slider.index');
    }
    public function product (){
        return view('product.index');
    }
    public function new (){
        return view('new.index');
    }
    public function partner (){
        return view('partner.index');
    }
    public function operator (){
        return view('operator.index');
    }

}
