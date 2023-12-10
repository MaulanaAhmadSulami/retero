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

    public function update(Request $request, $uuid){
        $request->validate(['content' => 'required|min:10|max:1000']);
        $comment = UserReview::where('id', $uuid)->firstOrFail();
        $comment->reviewComment = $request->content;
        $comment->save();

        return response()->json(['success' => true, 'newComment' => $comment->reviewComment]);
    }

    public function destroy($uuid){
        $comment = UserReview::findOrFail($uuid);
        
        $user = Auth::user()->id;

        if(Auth::user()->isAdmin || Auth::id() === $comment->user_id){
            $comment -> delete();
            return back()->with('success', 'Comment deleted!');
        }

    }
   
}
