@extends('layouts.adminLayout')

@section('content')
<form role ="form" action="" method="post">
    @csrf       
        <label>Name</label>
<<<<<<< HEAD
        <input class="form-control" name="name" value ="{{$cate->name}}">       
=======
        <input class="form-control" name="category_name" value ="{{$cate->category_name}}">       
>>>>>>> 2f58b2851c556e39b7f119904f5b370085fb5203
    <button type="submit" class="btn btn-success">Submit Button</button>
    <button type="reset" class="btn btn-primary">Reset Button</button>
</form>

@endsection