@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <div class="container">
      <h1>{{$det->name}}</h1>
      <p>{{$det->about}}</p>
      <p><a class="btn btn-primary btn-lg" href="/roles/{{$det->id}}/edit" role="button">Edit Role</a></p>
      <p><button class="btn btn-danger btn-lg" onClick='run();' >Delete</button></p>
        
    </div>
  </div>

  <script>
     function run(){
                var x = confirm("Do you want to delete role?");
                if(x){

 event.preventDefault();
 document.getElementById('form-delete').submit();

  }


     }
            
            </script>

    <form id="form-delete" method='POST' action="{{ route('roles.destroy',[$det->id]) }}" style ="display:hidden">
        {{ csrf_field() }}

        <input type='hidden' name = '_method' value = "delete">


    </form>

     }

  



@endsection