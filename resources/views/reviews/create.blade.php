@extends('layouts.main')

@section('content')
<div class="max-w-2xl mx-auto p-6">
    <h2 class="text-2xl font-bold text-[#333333] mb-6">Write Your Review</h2>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-[#FEE2E2] border border-[#F87171] text-[#333333] rounded-lg">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reviews.store') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="rating" class="block text-sm font-medium text-[#333333] mb-2">Rating</label>
            <div class="star-rating flex gap-2">
                @for ($i = 5; $i >= 1; $i--)
                    <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}" class="hidden" required {{ old('rating') == $i ? 'checked' : '' }}>
                    <label for="star{{ $i }}" class="star cursor-pointer text-2xl text-[#D1D5DB]">★</label>
                @endfor
            </div>
            @error('rating')
                <p class="mt-1 text-sm text-[#DC2626]">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="content" class="block text-sm font-medium text-[#333333] mb-2">Your Review</label>
            <textarea 
                name="content" 
                id="content" 
                rows="4" 
                class="w-full px-4 py-2 border border-[#E5E7EB] rounded-md focus:outline-none focus:border-[#55B76B]"
                required
            >{{ old('content') }}</textarea>
            @error('content')
                <p class="mt-1 text-sm text-[#DC2626]">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="w-full bg-[#55B76B] text-[#FFFFFF] py-3 rounded-md hover:bg-[#3B8B4B] transition-colors font-medium">
            Submit Review
        </button>
    </form>
</div>

<style>
    .star-rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: flex-end;
    }
    
    .star-rating input[type="radio"]:checked ~ label {
        color: #FFA500;
    }
    
    .star-rating label:hover,
    .star-rating label:hover ~ label {
        color: #FFA500;
    }
    
    .star-rating input[type="radio"]:checked + label:hover,
    .star-rating input[type="radio"]:checked ~ label:hover,
    .star-rating label:hover ~ input[type="radio"]:checked ~ label {
        color: #FFA500;
    }
</style>
@endsection 