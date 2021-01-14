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
    <center><h1>Add New</h1></center>
   <form action="save" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <div class="form-group">
        <label>Title</label>
    <input type="text" class="form-control" placeholder="Title" required name="title">
    </div>
   
    
    <div class="form-group">
        <label>Subtitle</label>
        <textarea  class="form-control" placeholder="Subtitle" required name="subtitle" id="subtitle" rows="8"></textarea>
    </div>
    <div class="form-group">
        <label>Thumbnail (680x440)</label>
        <input required type="file" class="form-control" name="thumb" placeholder="Thumb" >
    </div>
    <div class="form-group">
        <label>Image</label>
        <input required type="file" class="form-control" name="photo" placeholder="Photo" >
    </div>
    <div class="form-group">
        <label>Date</label>
        <input type="date" data-date-format="yyyy/mm/dd" class="form-control" placeholder="Date" required name="date">
    </div>
   <br>
   <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection