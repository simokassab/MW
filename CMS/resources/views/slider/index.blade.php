@extends('layouts.app')

<style>

</style>
@section('content')
    <center><h1>Slider - Home page </h1></center>
    <a href="./slider/create" class="btn btn-primary a-btn-slide-text">
        <span class="fa fa-plus" aria-hidden="true"></span>
        <span><strong>Create New</strong></span>
    </a>
        <span class="fa fa-sign-out-alt" aria-hidden="true"></span>
        <span><strong>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                Logout
            </a>    
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </strong></span>
    <hr>
    <table id='users' class="table table-bordered table-bordered">
        <thead>
        <tr>
            <td>Title</td>
            <td>Subtitle</td>
            <td>Active</td>
            <td>CONTROL</td>
        </tr>
        </thead>
        <tbody>
        @foreach($slider as $u)
            <tr>
                <td>{{$u->title}}</td>
                <td>{{$u->subtitle}}</td>
                @if($u->active ==1)
                    <td style="color:#45A163; font-weight: bold;">Active</td>
                @else
                    <td style="color: #E22747;font-weight: bold;">Inactive</td>
                @endif
                <td>
                    <a title="view" target="_blank" href='./slider/{{$u->id}}' class="btn btn-primary a-btn-slide-text">
                        <span class="fa fa-eye" aria-hidden="true"></span>
                    </a>
                    <a title="edit" href='./slider/{{$u->id}}/edit'  class="btn btn-warning a-btn-slide-text" style="color:white;">
                        <span class="fa fa-edit" aria-hidden="true"></span>
                    </a>
                    <a title="Delete" href='./slider/delete/{{$u->id}}'  onclick="return confirm('Are you sure you want to delete this employee?')" class="btn btn-danger a-btn-slide-text">
                        <span class="fa fa-trash-alt" aria-hidden="true"></span>
                    </a>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>



 