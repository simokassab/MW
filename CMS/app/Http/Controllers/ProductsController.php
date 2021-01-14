<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use  Auth;
use Mail;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $products = DB::table("products")->get();
            return view('product.index')->with("products", $products);
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
        return view('product.create');
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
        $thumb->move(public_path('/products/'), $thumbimage);
        DB::table('products')->insert([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'image' => $thumbimage
        ]);
        return redirect('/product')->with('success', 'New product Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = DB::table('products')->where('id', $id)->get();
        return view('product.edit')->with('products', $products);
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
            $file->move(public_path('/products/'), $nameimg);
            DB::table('products')
            ->where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'image' =>  $nameimg
            ]);
        }
        else {
            DB::table('products')
            ->where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle')
            ]);
        }
       
            return redirect('/product')->with('success', 'product UPDATED !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect('/product')->with('success', 'Product has been Deleted successfully !');
    }
}
