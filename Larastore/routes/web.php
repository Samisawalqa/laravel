<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use App\Models\Category_product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/store', function () {
    $products = Product::with('category')->latest()->simplePaginate(4);

    return view('store.index', ['products' => $products]);
});

Route::get('/store/add', function(){
    $categories = Category::all();

    return view('store.add', ['categories' => $categories]);
});

// Store
Route::post('/store', function () {
    
    request()->validate([
        'product_name' => ['required'],
        'product_description' => ['required'],
        'product_price' => ['required']
    ]);

    Product::create([
        'product_name' => request('product_name'),
        'product_description' => request('product_description'),
        'product_price' => request('product_price')
        ]);


        // add pivot table row
        $product_id = Product::all()[count(Product::all())-1]->id;

        $categories = Category::all();
        foreach($categories as $category){
        $ct_name = $category->category_name;
        if(request()->$ct_name){    
            category_product::create([
            'product_id' => $product_id,
            'category_id' => $category->id
        ]);
    }}


    return redirect('/store');
});

Route::get('/store/{id}', function($id){
    $product = Product::with('category')->find($id);
    return view('store.show', ['product' => $product]);
});

Route::get('/store/edit', function () {
    return view('store.edit');
});

