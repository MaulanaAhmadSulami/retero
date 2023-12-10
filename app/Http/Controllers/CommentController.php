<?php

namespace App\Http\Controllers;

use App\Models\UserReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    //

    public function store(Request $request, $productId){

        $request->validate([
            'comment' => 'required|min:10|max:1000',
        ]);

        UserReview::create([
            'user_id' => Auth::user()->id,
            'product_id' => $productId,
            'reviewComment' => $request->comment,
        ]);

        return back()->with('success', 'Posted the comment!');
    }

    public function edit($id){
        $comment = UserReview::findOrFail($id);
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, $id){
        $request->validate(['comment' => 'required|min:10|max:1000']);
        $comment = UserReview::findOrFail($id);
        $comment->reviewComment = $request->comment;
        $comment->save();

        return response()->json(['success' => true]);
    }

    public function destory($id){
        $comment = UserReview::findOrFail($id);
        $comment -> delete();

        return redirect()->back()->with('success', 'Comment deleted');
    }
   
}
