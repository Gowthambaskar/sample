<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example From Scratch </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <a href="{{ url('/create') }}">Create Product</a>


    <table class="table table-striped">
        <thead>
            <tr>
              <td>Name</td>
              <td>Description</td>
              <td>Price</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a class="btn btn-info" href="{{ url('show',$product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ url('edit',$product->id) }}">Edit</a>
                    <a class="btn btn-info" href="{{ url('destroy',$product->id) }}">Delete</a>
                </td>           
           </tr>
            @endforeach
        </tbody>
    </table>
<div>
  </body>
</html>