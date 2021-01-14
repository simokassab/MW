<?php 
define("MAIN_URL", "http://".$_SERVER['SERVER_NAME']."/SMS");
?>
@extends('layouts.app')

@section('content')
    <center><h1>Edit  New </h1></center>
    @foreach ($news as $us)
        <form action="update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <input type="hidden" name="id" value="{{ $us->id  }}" />
            <div class="form-group">
                <label>Title</label>
            <input type="text" class="form-control" placeholder="Title" required name="title" value="{{ $us->title }}">
            </div>
            <div class="form-group">
                <label>Subtitle</label>
                <input type="text" class="form-control" placeholder="Subtitle" required name="subtitle" id="subtitle" value="{{ $us->subtitle }}">
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" placeholder="Date" required name="date" value="{{ $us->date }}">
            </div>
            <div class="form-group">
                <label>Thumbnail (680x440)</label>
                <input required type="file" class="form-control" name="thumb" placeholder="Thumb" >
                <div>
                    Existing Thumbnail: 
                    <img width="120px" class="img-thumbnail" src='{{ asset("/news/thumbnails/")."/".$us->thumb }}' />
                    </div><br/>
            </div>
            <div class="form-group">
                <label>Change Icon</label>
                <input  type="file" class="form-control" name="photo" placeholder="Photo" >
                <br>
            <div>
                Existing Image: 
                <img width="120px" class="img-thumbnail" src='{{ asset("/news/")."/".$us->image }}' />
                </div><br/>
            </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    
    @endforeach
@endsection
 