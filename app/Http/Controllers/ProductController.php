<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProducts()
    {
        return view('products.index');
    }
    public function create()
    {
        return '<h1>this is the form to create a product</h1>';
    }
    public function store()
    {
        return '<h1>this is the list of products</h1>';
    }
    public function show($products)
    {
        return view('products.show');
    }
    public function edit($products)
    {
        return "<h1>Page Edit product id: {$products}</h1>";
    }
    public function update($products)
    {
        return "<h1>Back Edit product id: {$products}</h1>";
    }
    public function destroy($products)
    {
        return "<h1>Back delete product id: {$products}</h1>";
    }
}
