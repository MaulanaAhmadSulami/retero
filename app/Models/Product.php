<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    
    protected $fillable = [
        'productTitle',
        'productDescription',
        'productType',
        'category_id',
        'image',
    ];
    

    public function show(Product $product)
    {
        return view('homepage.dashboard', compact('review'));
    }

    public function advantages(){
        return $this->hasMany(ProductAdvantages::class);
    }

    public function disadvantages(){
        return $this->hasMany(Productdisadvantages::class);
    }

    
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user_review(){
        return $this->hasMany(UserReview::class);
    }



    public $incrementing = false;
    
    public $keyType = 'string';

    protected static function boot(){
        parent::boot();
        static::creating(function ($model){
            if(empty($model->{$model->getKeyName()})){
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }
}
