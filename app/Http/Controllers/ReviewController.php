<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Review;

class ReviewController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'isi' => 'required',
        ]);

        $review = new Review;
 
        $review->isi = $request->isi;
        $review->poin = $request->poin;
        $review->user_id = Auth::id();
        $review->jurnal_id = $request->jurnal_id;
 
        $review->save();
        return redirect()->back();

    }
}
