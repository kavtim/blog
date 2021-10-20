@extends('layouts.app')

@section('content')


<div class='container'>
    <ul class="list-group">
 @foreach($person as $per)
        <li class="list-group-item"><a href = "/workers/{{$per->id}}">{{$per->name}}</a></li>
@endforeach
      </ul>

@endsection