<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example From Scratch </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Create A Product</h2><br/>
      <form action="{{url('/edit_item/{id}')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Description:</label>
            <textarea rows="5" cols="20" wrap="hard" class="form-control" name="description">{{$product->description}}</textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Price:</label>
              <input type="text" class="form-control" name="price" value="{{$product->price}}">
            </div>
          </div>

          <!-- <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Image:</label>
              <input type="file" name="image" id="image" value="{{ $product->image }}">
            </div>
          </div>
 -->


        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Add Product</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>