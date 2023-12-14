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
        dd($products);
    }

    public function showProduct($id)
    {

        $product = Product::with(['advantages', 'disadvantages'])->find($id);
        $comments = $product->user_review()->with('user')->orderBy('created_at', 'desc')->get();

        return view('homepage.productDetail', ['product' => $product, 'comments' => $comments]);
    }

    public function moreReview()
    {


        $productTypes = Product::distinct('productType')->pluck('productType');

        $productsByType = [];

        foreach($productTypes as $type){
            $productsByType[$type] = Product::where('productType', $type)->get();
            // $productsByType[$type] = Product::where('productType', $type)->get();
        }

        return view('homepage.morereview', ['productsByType' => $productsByType]);
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
