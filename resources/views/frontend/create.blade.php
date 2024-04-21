@extends('frontend.layout')
@section('content')

<div class="card" style="margin:20px;"> 
    <div class="card-header">
        Create New Users
    </div>
    <div class="card-body">
    <form action="{{ url('users') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Cars</label></br>
        <input type="text" name="cars" id="cars" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    </div>
</div>

@stop