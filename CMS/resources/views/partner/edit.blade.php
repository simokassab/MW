<?php 
define("MAIN_URL", "http://".$_SERVER['SERVER_NAME']."/SMS");
?>
@extends('layouts.app')

@section('content')
    <center><h1>Edit  New </h1></center>
    @foreach ($partners as $us)
        <form action="update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <input type="hidden" name="id" value="{{ $us->id  }}" />
            <div class="form-group">
                <label>Name</label>
            <input type="text" class="form-control" placeholder="Name" required name="name" value="{{ $us->name }}">
            </div>
            <div class="form-group">
                <label>Change Icon</label>
                <input  type="file" class="form-control" name="photo" placeholder="Photo" >
                <br>
                <div>
                    <?php
                    // echo $img;
                    ?>
                    Existing Image: 
                    <img width="120px" class="img-thumbnail" src='{{ asset("/partners/")."/".$us->image }}' />
                </div><br/>
            </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    
    @endforeach
@endsection
 