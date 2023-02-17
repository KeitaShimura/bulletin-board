<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $like = new Like();
        $like->user_id = Auth::user()->id;
        $like->post_id = $request->post_id;
        $like->save();

        return redirect('/post')->with('success', 'いいね！しました。');
    }

    /**

     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Like::findOrFail($id);
        $comment->delete();

        return redirect()->back()->with('success', 'いいね！を解除しました。');
    }
}
