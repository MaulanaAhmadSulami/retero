<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    protected $fillable = [
        'productTitle', 
        'productDescription', 
        'rating', 
        'image',
    ];

    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }
}
