<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{

	public function index()
    {
    	$products=Product::all();

        return view('index',compact('products'));
    }

    public function create()
    {
        return view('create');
    }

      public function store(Request $request)
  	{
         $request->validate([

          'name' => 'required',
          'description' => 'required',
          'price' => 'required|numeric',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        if( $request->hasFile('image') ) 
     	{
	        $file = $request->file('image');
	        // Get the Image Name
	        $fileName = $file->getClientOriginalName();
	        // Set the Filepath 
	        $path = 'uploads/'.$fileName;
	        // Move the file to the upload Folder
	        $file = $file->move('uploads/', $fileName);
	        //dd($path);
    	}
        $product= new Product(array(
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'image' => $path

        ));
        $product->save();
        return redirect('/');

 	}

 	public function edit(Product $product,$id)
    {
        $product = Product::find($id);
        return view('edit',compact('product','id'));
    }


    public function update(Request $request,Product $product,$id)
    { 
    	//dd($id);
        $request->validate([

          'name' => 'required',
          'description' => 'required',
          'price' => 'required|numeric',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $product = Product::find($id);
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        if( $request->hasFile('image') ) 
      {
          $file = $request->file('image');
          // Get the Image Name
          $fileName = $file->getClientOriginalName();
          // Set the Filepath 
          $path = 'uploads/'.$fileName;
          // Move the file to the upload Folder
          $file = $file->move('uploads/', $fileName);
          //dd($path);
      }
        $product->image = $path;
        $product->save();

        return redirect('/');
    }

     public function show(Product $product,$id)
    {
        $product = Product::find($id);
        return view('show',compact('product'));

    }

    public function destroy(Product $product,$id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/');
    
    }
  



}
