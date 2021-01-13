<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use  Auth;
use Mail;

class OperatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $operators = DB::table("operators")->get();
            return view('operator.index')->with("operators", $operators);
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
        return view('operator.create');
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
        $thumb->move(public_path('/operators/'), $thumbimage);
        DB::table('operators')->insert([
            'name' => $request->input('name'),
            'image' => $thumbimage
        ]);
        return redirect('/operator')->with('success', 'New has been Created');
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
        $operators = DB::table('operators')->where('id', $id)->get();
        return view('operator.edit')->with('operators', $operators);
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
            $file->move(public_path('/operators/'), $nameimg);
            DB::table('operators')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'image' =>  $nameimg
            ]);
        }
        else {
            DB::table('operators')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
            ]);
        }
       
            return redirect('/operator')->with('success', 'New has been UPDATED !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('operators')->where('id', $id)->delete();
        return redirect('/operator')->with('success', 'New has been Deleted successfully !');
    }
}
