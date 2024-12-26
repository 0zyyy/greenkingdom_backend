<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|min:10',
            'rating' => 'required|integer|min:1|max:5',
        ], [
            'content.required' => 'Please write your review',
            'content.min' => 'Review must be at least 10 characters',
            'rating.required' => 'Please select a rating',
        ]);

        $review = Review::create([
            'user_id' => auth()->id(),
            'content' => $validated['content'],
            'rating' => $validated['rating'],
        ]);

        return redirect()->route('home')->with('success', 'Thank you for your review!');
    }
} 