@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold text-white mb-6">
        Search Results @if($query) for "{{ $query }}" @endif
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @forelse($places as $place)
            <!-- Agar Places mil jayein toh yeh Card show hoga -->
            <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg border border-gray-800">
                <img src="{{ asset('images/' . $place->image) }}" alt="{{ $place->title }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-white">{{ $place->title }}</h3>
                    <p class="text-gray-400 text-sm mt-1">{{ $place->location }}</p>
                    <a href="{{ route('place.detail', $place->slug) }}" class="inline-block mt-4 bg-yellow-500 text-black px-4 py-2 rounded-lg font-semibold">
                        Explore Place
                    </a>
                </div>
            </div>
        @empty
            <!-- Agar koi record na mile toh yeh Not Found message aayega -->
            <div class="col-span-full text-center py-12 bg-gray-900 rounded-xl border border-gray-800">
                <h3 class="text-2xl font-bold text-white">No Places Found</h3>
                <p class="text-gray-400 mt-2">We do not have destination that you search.</p>
                <a href="{{ url('/') }}" class="inline-block mt-6 bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold">
                    Go Back Home
                </a>
            </div>
        @endforelse
    </div>
</div>
@endsection