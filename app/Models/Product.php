<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function show(Product $product)
    {
        return view('homepage.dashboard', compact('review'));
    }

    public function advantages(){
        return $this->hasMany(ProductAdvantages::class);
    }

    public function disadvantages(){
        return $this->hasMany(ProductDisadvantages::class);
    }
}
