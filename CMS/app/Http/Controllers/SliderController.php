<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use  Auth;
use Mail;
use File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $slider = DB::table("home")->get();
            return view('slider.index')->with("slider", $slider);
        } else {
            return redirect('/login')->with('error', 'Login First');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('home')->insert([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
           
        ]);
    
    return redirect('/slider')->with('success', 'Slider Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = DB::table('home')->where('home.id', $id)->get();

    return view('slider.view')->with('slider', $slider);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = DB::table('home')->where('home.id', $id)->get();
        return view('slider.edit')->with('slider', $slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('home')
        ->where('id', $id)
        ->update([
        'title' => $request->input('title'),
        'subtitle' => $request->input('subtitle'),
        ]);
        return redirect('/slider')->with('success', 'Slider  UPDATED !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('home')->where('id', $id)->delete();
        return redirect('/slider')->with('success', 'slider has been Deleted successfully !');
    }
}
