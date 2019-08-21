@extends('layouts.master')
@section('title','add')
@section('content')
    <br>
    <h1>INSERT DATA</h1>
    <br>
    <form action="{{url('people')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Firstname</label>
            <input type="text" class="form-control" name="fname">
        </div>
        <div class="form-group">
                <label>Lastname</label>
                <input type="text" class="form-control" name="lname">
        </div>
        <div class="form-group">
                <label>AGE</label>
                <input type="text" class="form-control" name="age">
        </div>
        <div align="right">
        <button type="submit" class="btn btn-dark btn-outline-light btn-lg">save</button>
        </div>
        <br>
        @if($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    //<div class="alert alert-danger">
                </ul>
            </div>
        @endif
    </form>
    
    <br>
@endsection
