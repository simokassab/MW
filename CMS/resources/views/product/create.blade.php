{{-- @extends('layouts.app')

@section('content')
    <center><h1>Add New Slider </h1></center>
    {!! Form::open(['action'=>'SliderController@store', 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <div class="form-group">
        {{form::label('title', 'Title')}}
        {{form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title', 'required'])}}
    </div>
    <div class="form-group">
        {{form::label('subtitle', 'Subtitle')}}
        {{form::text('subtitle', '', ['class'=>'form-control', 'placeholder'=>'subtitle', 'required'])}}
    </div>
   <br>
        {{form::submit('Submit', ['class'=>'btn btn-primary'])}}
        
    {!! Form::close() !!}<br><br>
@endsection --}}

@extends('layouts.app')
@section('content')
    <center><h1>Add New Product </h1></center>
   <form action="save" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <div class="form-group">
        <label>Title</label>
    <input type="text" class="form-control" placeholder="Title" required name="title">
    </div>
   
    
    <div class="form-group">
        <label>Subtitle</label>
        <input type="text" class="form-control" placeholder="Subtitle" required name="subtitle">
    </div>
    <div class="form-group">
        <label>Icon</label>
        <input required type="file" class="form-control" name="photo" placeholder="Photo" >
    </div>
   <br>
   <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection