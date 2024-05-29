<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        return Product::all();
    }

    public function store(Request $request){
        return Product::create($request->all());
    }

    public function show($id){
        return product::find($id);
    }

    public function update(Request $request,$id)
    {
        $product=product::find($id);
        $product->update($request->all());
        return $product;
    }
    public function destroy($id)
    {
        return product::destroy($id);
    }
}
