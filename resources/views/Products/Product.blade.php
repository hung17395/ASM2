@extends('layouts.adminLayout')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Product Table</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  #
                </th>
                <th>
                  Title
                </th>
                <th>
                  Img
                </th>
                <th>
                  Price
                </th>
                <th>
                  Category
                </th>
                <th class="text-right">
                  Option
                </th>
              </thead>
              <tbody>
                @foreach ($products as $product)
                        <tr>
                          <th scope="row">{{ $product->id }}</th>
                          <td>{{ $product->title }}</td>
                          <td>link img</td>
                          <td>{{ $product->price }}</td>
                          <td>{{ $product->Category->name}}</td>
                          <td class="text-right">
                            {{-- <a href="{{asset('/create')}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Add</a>
                            <a href="{{asset('editCategory/'.$value->id)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
                            <a href="{{asset('/category/delete/'.$value->id)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a> --}}
                          </td>
                        </tr>
                        @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
                    <p>Product </p>
                    <button class="btn btn-info float-right md-4" ><a href="{{ url('/create-product') }}">Add Product</a></button>                
@endsection