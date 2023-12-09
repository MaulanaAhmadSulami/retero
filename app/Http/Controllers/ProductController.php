<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::orderBy('created_at', 'desc')->take(3)->get();
        return view('homepage.dashboard', compact('products'));
    }

    public function showProduct($id)
    {

        $product = Product::with(['advantages', 'disadvantages'])->find($id);



        return view('homepage.productDetail', ['product' => $product]);
    }

    public function moreReview()
    {

        $products = Product::with('category')->get()->groupBy('productType');

        return view('homepage.morereview', ['products' => $products]);
    }

    //randomize
    public function randomProduct($categoryId)
    {
        $randomProduct = Product::where('category_id', $categoryId)->inRandomOrder()->firstOrFail();
        return redirect()->route('homepage.productDetail', ['id' => $randomProduct->id]);
    }

    public function showProductByCategory($category)
    {
        $category = strtolower($category);
        $products = Product::where('productType', 'LIKE', "%{$category}%")->get();
        return view('homepage.filteredProduct', ['products' => $products]);
    }




    //one to many - one product has many advantages
    // public function getAdvantage($id){
    //     $product = Product::find($id);
    //     $advantageArray = explode('||', $product->advantage);
    // }

    // public function storeAdvantage(Request $request){
    //     $advantageArray = [];
    //     foreach($request->advantage as $advantage){
    //         array_push($advantageArray, $advantage);
    //     }
    //     $advantageString = implode('||', $advantageArray);
    //     $product = Product::find($request->id);
    //     $product->advantage = $advantageString;
    //     $product->save();

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
