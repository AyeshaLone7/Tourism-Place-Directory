@extends('layouts.app')
@section('content')

<!-- Hero 1: Main Search Banner -->
<div class="relative h-[85vh] flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('images/home/hero-1.webp') }}');">
    <div class="absolute inset-0 bg-slate-950/50"></div>
    <div class="relative z-10 text-center max-w-4xl mx-auto px-4">
        <p class="text-amber-400 font-serif italic text-xl mb-2">Tourism Place Directory</p>
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-8 tracking-tight">Let's Explore Pakistan</h1>
        
        <!-- Search Form jo ab alag search page par le kar jayega -->
        <form action="{{ route('places.search') }}" method="GET" class="flex items-center justify-center gap-2 flex-wrap">
            <!-- Search Text Input -->
            <input type="text" name="query" value="{{ request('query') }}" placeholder="Where do you want to go?" class="bg-gray-800 text-white px-4 py-3 rounded-xl border border-gray-700 focus:outline-none focus:border-amber-500 w-72">

            <!-- Category Dropdown -->
            <select name="category" class="bg-gray-800 text-white px-4 py-3 rounded-xl border border-gray-700 focus:outline-none focus:border-amber-500">
                <option value="">All Categories</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <!-- Search Button -->
            <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold px-6 py-3 rounded-xl transition">
                Search
            </button>
        </form> 

    </div>
    
</div>

<!-- Categories Grid Section -->
<div class="max-w-7xl mx-auto px-6 py-16">
    <h2 class="text-3xl font-bold mb-8 text-amber-400">Explore by Category</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
        @foreach($categories as $cat)
            <a href="{{ route('category', $cat->slug) }}" class="group relative rounded-xl overflow-hidden shadow-lg border border-slate-800 h-40">
                <img src="{{ asset('images/' . $cat->image) }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 to-transparent flex items-end p-4">
                    <span class="text-white font-semibold group-hover:text-amber-400">{{ $cat->name }}</span>
                </div>
            </a>
        @endforeach
    </div>
</div>

<!-- Hero Section 2: Height Increased & Overlay Made Lighter -->
<div class="relative h-[75vh] flex items-center justify-center bg-cover bg-center my-12" style="background-image: url('{{ asset('images/home/hero-2.jpg') }}');">
    <div class="absolute inset-0 bg-slate-950/40"></div>
    <div class="relative max-w-5xl mx-auto text-center px-6 z-10">
        <h2 class="text-4xl md:text-6xl font-extrabold text-white mb-4 drop-shadow-lg">Discover Hidden Gems & Majestic Peaks</h2>
        <p class="text-slate-200 text-lg md:text-xl drop-shadow-md">Plan your journey with confidence using our luxury directory.</p>
    </div>
</div>

<!-- Hero Section 3: Adjusted background position to show bottom part clearly -->
<div class="relative h-[70vh] flex items-center justify-center bg-cover bg-[center_top_30%] border-t border-slate-800 mt-16" style="background-image: url('{{ asset('images/deserts/thar-desert.jpeg') }}');">
    <div class="absolute inset-0 bg-slate-950/45"></div>
    <div class="relative max-w-4xl mx-auto text-center px-6 z-10">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 drop-shadow-lg">Ready to Start Your Adventure?</h2>
        <a href="{{ route('contact') }}" class="inline-block bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold px-8 py-3 rounded-xl transition shadow-xl">Contact Us Today</a>
    </div>
</div>

@endsection