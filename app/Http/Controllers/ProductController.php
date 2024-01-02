<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $products = Product::query()
                ->where('name', 'LIKE', "%{$search}%")
                ->get();
        } else {
            $products = Product::all();
        }

        return view('welcome', ['products' => $products]);

        //{ 
        //    $products = DB::select('SELECT * FROM products'); 
        //   return view('products', ['products'=>$products]); 
        // } 
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('view', ['product' => $product]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->details = $request->details;
        $product->publish = $request->publish;
        $product->save();

        return redirect()->route('welcome');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->details = $request->details;
        $product->publish = $request->publish;
        $product->save();

        return redirect()->route('welcome');
    }

    public function destroy($id)
{
  Product::destroy($id);
  return redirect()->route('welcome');
}

   // public function destroy($id)
   // { 
   //     DB::delete('DELETE FROM users WHERE id = ?', [$id]); 
   //       echo ("User Record deleted successfully."); 
   //       return redirect()->route('users.index');  
   // } 


}

