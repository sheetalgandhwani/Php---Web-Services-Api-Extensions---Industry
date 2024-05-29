<?php
use App\Models\product;
use App\Http\Controllers\ProductController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('/products', function () {
//     return "products";
// });


// Route::get('/products', function () {
//        return product::all();
//      });

//      Route::post('/products',function(){
//         return product::create([

//          'name'=>"Sheetal",
//          'slug'=>"laravel",
//          'description'=>"this is laravel",
//          'price'=>"10"

//         ]);
      
//       });
     
      Route::get('/products',[ProductController::class,'index']);

      Route::post('/products',[ProductController::class,'store']);

      Route::get('/products/{id}',[ProductController::class,'show']);

      Route::put('/products/{id}',[ProductController::class,'update']);

      Route::delete('/products/{id}',[ProductController::class,'destroy']);


       


      

      






    



