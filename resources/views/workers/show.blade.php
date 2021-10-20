@extends('layouts.app')


@section("content")


<div class="jumbotron container">
    <h1>{{$dets->name}}</h1>
    <p>Date of Birth: {{$dets->age}}</p>
    <p>Location: {{$dets->location}}</p>
    @foreach($dets->test as $cp)
    <p>Role: {{$cp->name}}</p>
@endforeach
    <p><a class="btn btn-primary btn-lg" href="/workers/{{$dets->id}}/edit" role="button">Edit Worker</a></p>
    <p><button class="btn btn-danger btn-lg" href="/workers/{{$dets->id}}" role="button" onclick="del();">Delete</button></p>
  </div>


  <script>
    function del(){

        var y = confirm("Do you want to delete worker?");

        if(y){
                event.preventDefault();
                document.getElementById('deletef').submit();


        }




    
    
    }


      </script>

            <form id = 'deletef' method ='POST' action="{{route('workers.destroy',[$dets->id])}}" style="display:hidden;">
                    {{ csrf_field() }}

                <input type ='hidden' value = "delete" name="_method">

            </form>

@endsection