@extends('layouts.app')

@section('content')

<div class='container'>
<ul class="list-group">
    @foreach($roles as $role)
    <li class="list-group-item"><a href='/roles/{{$role->id}}'>{{$role->name}}</a></li>

@endforeach
  </ul>
</div>




@endsection