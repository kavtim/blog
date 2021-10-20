@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-lg-4">
</div>
<div class="col-lg-4">
<form method ="post" action="{{ route('workers.update',[$wkr->id]) }}">
    {{ csrf_field() }}

    <input type = 'hidden' name="_method" value='put'>


    <label>Name of Role</label><br>
    <input type = 'text' value = '{{$wkr->name}}' class = "form-control" name="name">
<br>
    <label>Location</label><br>

    <input type="textarea" value='{{$wkr->location}}' class="form-control" name = 'location'>
<br>
          <input type = 'submit' value='submit' name ="Submit" class="btn btn-success">

          
</form>

</div>
<div class="col-lg-4">
</div>

</div>

@endsection