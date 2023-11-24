<?php

namespace App\Http\Controllers;

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
        
        $products = Product::all();
        return view('homepage.dashboard', compact('products'));

    }

    public function showProduct($id){

        $product = Product::with(['advantages' , 'disadvantages'])->find($id);
        return view('homepage.productDetail', compact('product'));

    }

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
