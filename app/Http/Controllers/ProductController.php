<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function manageProduct(){

        return view('products');
    } // end method

    public function createProduct(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ],
        [
            'name.required' => 'Name is required !',
            'price.required' => 'Price is required !',
        ]);
        Product::productUpdateOrCreate($request);
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function getProduct(){
        $products = Product::orderBy('id', 'DESC')->get();
        return response()->json($products);
    }

    public function updateProduct(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ],
        [
            'name.required' => 'Name is required !',
            'price.required' => 'Price is required !',
        ]);
         $id = $request->id;
         Product::productUpdateOrCreate($request,$id);
         return response()->json([
            'status' => 'success',
        ]);
    }


    public function deleteProduct(Request $request){
        Product::find($request->id)->delete();
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function searchProduct(Request $request){
        $searchProduct = Product::where('name', 'like', '%'.$request->searchProduct.'%')
        ->orWhere('price', 'like', '%'.$request->searchProduct.'%')
        ->orderBy('id', 'DESC')
        ->get();
        if($searchProduct->count() >=1){
            return  response()->json($searchProduct);
        }else{
            return response()->json([
                'status' => 'Nothing found',
            ]);
        }
    }





}
