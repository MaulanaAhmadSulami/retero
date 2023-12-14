<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAdvantages;
use App\Models\Productdisadvantages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function getCategories(){
        $categories = Category::all();

        return view('adminCreatePost', ['categories' => $categories]);
    }


    public function createPost(Request $request){

      

        $product = new Product();
        $product->productTitle = $request->input('productTitle');
        $product->category_id = $request->input('category');
        $product->productType = $request->input('productType');
        $product->image = $request->input('image');
        $product->productDescription = $request->input('productDescription');

        $message = 'Successfully posted the Product!';

        if($request->hasFile('image')){

            if($product->image && Storage::exists($product->image)){
                Storage::delete($product->image);
            }

            $path = $request->file('image')->store('products', 'public');
            $product->image = $path;
        }

        
        $product->save();
        
        if($request->has('advantages')){
            foreach($request->advantages as $advantage){
                $productAdvantage = new ProductAdvantages();
                $productAdvantage->product_id = $product->id;
                $productAdvantage->advantageDescription = $advantage;
                $productAdvantage->save();
            }
        }
        
        if($request->has('disadvantages')){
            foreach($request->disadvantages as $disadvantage){
                $productDisadvantage = new Productdisadvantages();
                $productDisadvantage->product_id = $product->id;
                $productDisadvantage->disadvantageDescription = $disadvantage;
                $productDisadvantage->save();
            }
        }
        $message = 'Successfully posted the Product!';
        
        return redirect()->route('admin.create')->with('message', $message);

    }

}
