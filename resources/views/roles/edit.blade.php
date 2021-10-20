@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-lg-4">
</div>
<div class="col-lg-4">
<form method ="post" action="{{ route('roles.update',[$chg->id]) }}">
    {{ csrf_field() }}

    <input type = 'hidden' name="_method" value='put'>


    <label>Name of Role</label><br>
    <input type = 'text' value = '{{$chg->name}}' class = "form-control" name="nams">
<br>
    <label>Description</label><br>

    <input type="textarea" value='{{$chg->about}}' class="form-control" name = 'descp'>
<br>
          <input type = 'submit' value='submit' name ="Submit" class="btn btn-success">
</form>

</div>
<div class="col-lg-4">
</div>

</div>

@endsection