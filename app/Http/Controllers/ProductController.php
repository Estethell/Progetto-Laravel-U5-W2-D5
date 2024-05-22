<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(12);
        return view('products.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->all();
         $newProduct = new Product();
         $newProduct->name = $data['name'];
         $newProduct->description = $data['description'];
         $newProduct->brand = $data['brand'];
         $newProduct->price = $data['price'];
         $newProduct->img = $data['img'];
         $newProduct->user_id = $request->user()->id;
         $newProduct->save();
        return redirect()->route('products.index')->with('operation_success','Product Add');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product,
        ]);
    }
        
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
   
    {
        if (Auth::user()->id !== $product->user_id) abort(401);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        if (Auth::user()->id !== $product->user_id) abort(401);
        $data = $request->all();

        $product->title = $data['title'];
        $product->author = $data['author'];
        $product->price = $data['price'];
        $product->brand = $data['brand'];
        $product->img = $data['img'];
        $product->update();


        return redirect()->route('products.show', compact('book'));
       
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
    }
}
