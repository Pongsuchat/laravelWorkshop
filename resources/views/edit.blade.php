@extends('layouts.master')
@section('title','add')
@section('content')
    <br><h1>EDIT NEW</h1><br>
    <form method="post" action="{{url('people',[$people->id])}}" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Firstname</label>
            <input class="form-control" type="text" name="fname" value="{{$people->fname}}">
        </div>
        <div class="form-group">
            <label>Lastname</label>
            <input class="form-control" type="text" name="lname" value="{{$people->lname}}">
        </div>
        <div class="form-group">
            <label>Lastname</label>
            <input class="form-control" type="text" name="age" value="{{$people->age}}">
        </div>
        <div align="right">
        <button type="submit" class="btn btn-dark">SAVE</button><br><br>
        </div>
    </form>
    @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    //<div class="alert alert-danger">
                </ul>
            </div>
        @endif
@endsection