@extends('layouts.master')
@section('title','List')
@section('content')
<br>
    <h1>LIST PAGE</h1>
    @if (Session::has('message'))
        <div class="alert alert-success">
                <strong>Success!</strong>
            {{ Session::get('message') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif
<br>
    <table class="table table-dark table-striped table-bordered" >
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
                <th>AGE</th>
                <th>CREATE AT</th>
                <th>LAST UPDATE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($people as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->fname}}</td>
                <td>{{$p->lname}}</td>
                <td>{{$p->age}}</td>
                <td>{{$p->created_at}}</td>
                <td>{{$p->updated_at}}</td>
                <td class="form-inline justified-content-center">
                            <form  action="people/{{$p->id}}/edit">
                                <button class="btn btn-info btn-outline-light btn-sm" type="submit">Edit</button>
                            </form>
                            <form style="margin-left: 10px ;padding-right:1px"  action="{{ url('people', [$p->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-outline-light btn-sm" type="submit">Delete</button>
                            </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="people/create" align="right">
        <button class="btn btn-success btn-lg btn-outline-light" type="submit">+</button><br>
    </form>
    
    <br>
@endsection

