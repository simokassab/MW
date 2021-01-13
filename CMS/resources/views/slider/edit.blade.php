<?php 
define("MAIN_URL", "http://".$_SERVER['SERVER_NAME']."/SMS");
?>
@extends('layouts.app')

@section('content')
    <center><h1>Edit  Slider </h1></center>
    @foreach ($slider as $us)
        <form action="update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <input type="hidden" name="id" value="{{ $us->id  }}" />
            <div class="form-group">
                <label>Title</label>
            <input type="text" class="form-control" placeholder="Title" required name="title" value="{{ $us->title }}">
            </div>
            <div class="form-group">
                <label>Subtitle</label>
                <input type="text" class="form-control" placeholder="Subtitle" required name="subtitle" value="{{ $us->subtitle }}">
            </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    
    @endforeach
@endsection
 