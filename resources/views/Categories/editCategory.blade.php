@extends('layouts.adminLayout')

@section('content')
<form role ="form" action="" method="post">
    @csrf       
        <label>Name</label>
        <input class="form-control" name="name" value ="{{$cate->name}}">       
    <button type="submit" class="btn btn-success">Submit Button</button>
    <button type="reset" class="btn btn-primary">Reset Button</button>
</form>

@endsection