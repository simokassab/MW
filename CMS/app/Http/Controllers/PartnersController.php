<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use  Auth;
use Mail;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $partners = DB::table("partners")->get();
            return view('partner.index')->with("partners", $partners);
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
        return view('partner.create');
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
        $thumb->move(public_path('/partners/'), $thumbimage);
        DB::table('partners')->insert([
            'name' => $request->input('name'),
            'image' => $thumbimage
        ]);
        return redirect('/partner')->with('success', 'New has been Created');
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
        $partners = DB::table('partners')->where('id', $id)->get();
        return view('partner.edit')->with('partners', $partners);
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
            $file->move(public_path('/partners/'), $nameimg);
            DB::table('partners')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'image' =>  $nameimg
            ]);
        }
        else {
            DB::table('partners')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
            ]);
        }
       
            return redirect('/partner')->with('success', 'New has been UPDATED !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('partners')->where('id', $id)->delete();
        return redirect('/partner')->with('success', 'New has been Deleted successfully !');
    }
}
