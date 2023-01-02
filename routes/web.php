<?php
use Illuminate\Http\Request;
use App\Models\Product;

Route::get('products', function () {
    $products = Product::orderBy('created_at','desc')->get();

    return view('products.index', compact('products'));
})->name('products.index');

route::get('products/create', function(){
    return view('products.create');
})->name('products.create');

Route::post('products', function(Request $request){


     $newProducto = new Product;
     $newProductoNEW = new Product;
     $newProducto->description = $request->input('description');
     $newProducto->price = $request->input('price');
     $newProducto->save();

     return redirect()->route('products.index')->with('info','Producto creado Existosamente para capacitacion');
    })->name('products.store');


    Route::delete('products/{id}', function($id){
      $product = Product::findOrFail($id);
      $product->delete();
      return redirect()->route('products.index')->with('info', 'Producto Eliminado Exitosamente');
    })->name('products.destroy');


Route::get('products/{id}/edit', function($id){
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
      })->name('products.edit');


Route::put('/products/{id}', function (Request $request, $id){

  $product = Product::findOrFail($id);
  $product->description = $request->input('description');
  $product->price = $request->input('price');
  $product->save();
  return redirect()->route ('products.index')->with('info','Producto Actualizado Existosamente');
})->name('products.update');
