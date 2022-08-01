@extends('layouts.layoutmain')

@section('content')
    <div>
                    <p>Product </p>                
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Price</th>
                          <th scope="col">Category</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $product)
                        <tr>
                          <th scope="row">{{ $product->id }}</th>
                          <td>{{ $product->title }}</td>
                          <td>{{ $product->price }}</td>
                          <td>{{ $product->Category->name}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>

@endsection