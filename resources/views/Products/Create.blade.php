@extends('layouts.layoutmain')

@section('content')
<form method="post" action="{{ '/add-product' }}">
      <legend>Add Product</legend>
      {{-- {{ csrf_field() }} --}}
      @csrf
      <div class="mb-3">
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Title</label>
            <input type="text" id="title" class="form-control" placeholder="Title">
          </div>
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Price</label>
        <input type="number" id="price" class="form-control" placeholder="Price">
      </div>
      <div class="mb-3">
        <label for="disabledSelect" class="form-label">Category</label>
        @foreach ($Categories as $Category)
        <select class="form-select" aria-label="Default select example">
            <option value="{{ $Category->id}}">{{ $Category->name}}</option>
          </select>
        @endforeach
        
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection