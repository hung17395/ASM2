@extends('layouts.adminLayout')

@section('content')

<form action="" method="post">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    @csrf
    <fieldset class="form-group">
        <label>Name</label>
<<<<<<< HEAD
        <input class="form-control" name="name" placeholder="Nhập tên category">
=======
        <input class="form-control" name="category_name" placeholder="Nhập tên category">
>>>>>>> 2f58b2851c556e39b7f119904f5b370085fb5203
    </fieldset>
    <button type="submit" class="btn btn-success">Submit Button</button>
    <button type="reset" class="btn btn-primary">Reset Button</button>
</table>
</form>
@endsection