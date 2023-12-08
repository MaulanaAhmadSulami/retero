<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchProduct(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('productTitle', 'LIKE', "%{$query}%")
            ->orWhere('productDescription', 'LIKE', "%{$query}%")
            ->paginate(6);

        return view('homepage.searchProduct', compact('products', 'query'));
    }


}
