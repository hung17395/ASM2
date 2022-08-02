@extends('layouts.layoutmain')

@section('content')
<form>
      <legend>Add Product</legend>
      <div class="mb-3">
        <div class="mb-3">
            <label for="disabledTextInputTitle" class="form-label">Title</label>
            <input type="number" id="Title" class="form-control" placeholder="Title">
          </div>
      </div>
      <div class="mb-3">
        <label for="disabledTextInputPrice" class="form-label">Price</label>
        <input type="number" id="Price" class="form-control" placeholder="Price">
      </div>
      <div class="mb-3">
        <label for="disabledSelect" class="form-label">Category</label>
        @foreach ($Categories as $Category)
        <select class="form-select" aria-label="Default select example">
            <option value="">{{ $Category->name}}</option>
          </select>
        @endforeach
        
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection