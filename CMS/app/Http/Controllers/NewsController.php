<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use  Auth;
use Mail;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $news = DB::table("news")->get();
            return view('new.index')->with("news", $news);
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
        return view('new.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
        ]);
        $thumb = $request->file('photo');
        $thumbimage = $thumb->getClientOriginalName();
        $thumb->move(public_path('/news/'), $thumbimage);
        DB::table('news')->insert([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'image' => $thumbimage,
            'date' => $request->input('date')
        ]);
        return redirect('/new')->with('success', 'New has been Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = DB::table('news')->where('id', $id)->get();
        return view('new.edit')->with('news', $news);
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
        $file = $request->file('photo');
        if ($file != '') {
            $this->validate($request, [
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
            ]);
            $nameimg = $file->getClientOriginalName();
            $file->move(public_path('/news/'), $nameimg);
            DB::table('news')
            ->where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'image' =>  $nameimg,
                'date' => $request->input('date')
            ]);
        }
        else {
            DB::table('news')
            ->where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                // 'image' =>  $nameimg,
                'date' => $request->input('date')
            ]);
        }
       
            return redirect('/new')->with('success', 'New has been UPDATED !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('news')->where('id', $id)->delete();
        return redirect('/new')->with('success', 'New has been Deleted successfully !');
    }
}
