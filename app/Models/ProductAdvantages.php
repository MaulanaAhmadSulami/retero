<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAdvantages extends Model
{
    use HasFactory;

    protected $table = 'product_advantages';

    protected $fillable = [
        'product_id',
        'advantageDescription',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
