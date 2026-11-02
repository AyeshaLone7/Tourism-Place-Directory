@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">
    <h1 class="text-4xl font-bold text-amber-400 mb-8">{{ $category->name }} Category</h1>
    
    <div class="grid md:grid-cols-3 gap-8">
        @forelse($places as $place)
            <div class="bg-slate-900 rounded-2xl overflow-hidden border border-slate-800 shadow-xl">
                <img src="{{ asset('images/' . $place->image) }}" class="h-48 w-full object-cover">
                <div class="p-6">
                    <p class="text-xs text-amber-400 mb-2">📍 {{ $place->location }}</p>
                    <h3 class="text-xl font-bold text-white mb-2">{{ $place->title }}</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-2">{{ $place->description }}</p>
                    <a href="{{ route('place.detail', $place->slug) }}" class="block text-center bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold py-2 rounded-xl transition">
                        Explore Place
                    </a>
                </div>
            </div>
        @empty
            <p class="text-slate-400">No places available in this category yet.</p>
        @endforelse
    </div>
</div>
@endsection