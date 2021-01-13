@extends('layouts.app')
<?php
define("MAIN_URL", "http://".$_SERVER['SERVER_NAME']."/SMS");
?>
<style>
    
</style>
@section('content')
    <style>


        /* Button used to open the contact form - fixed at the bottom of the page */


        /* The popup form - hidden by default */
        .form-popup {
            display: none;
            bottom: 0;
            border: 3px solid #f1f1f1;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }
    </style>


        @foreach($slider as $u)
            <div class="container-fluid">
                <center><h1>Slider: {{$u->title}}</h1></center>
                <hr>
                <br>
                <div class="row">
                    <div class="col col-sm-12">
                        <label for="name">Title:</label>
                        <input disabled type="text" class="form-control" value="{{$u->title}}">
                    </div>
                </div>
                <br><hr>
                <div class="row">
                    <div class="col col-sm-12">
                        <label for="industry">Subtitle:</label>
                        <input disabled type="text" class="form-control" value="{{$u->subtitle}}">
                    </div>
                </div>
                <br><hr>

            </div>

        @endforeach
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

<script>
$(document).ready(function (e) {

})
</script>

 