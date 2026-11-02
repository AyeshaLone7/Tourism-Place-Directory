@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-6 py-12">
    <div class="bg-slate-900 rounded-3xl overflow-hidden border border-slate-800 shadow-2xl">
        <img src="{{ asset('images/' . $place->image) }}" class=" object-contain max-h-[500px] w-full mx-auto">
        
        <div class="p-8">
            <div class="flex justify-between items-center mb-4">
                <span class="bg-amber-500/10 text-amber-400 border border-amber-500/20 px-3 py-1 rounded-full text-sm font-semibold">
                    {{ $place->category->name }}
                </span>
                <span class="text-slate-400 text-sm">📍 {{ $place->location }}</span>
            </div>

            <h1 class="text-4xl font-extrabold text-white mb-6">{{ $place->title }}</h1>
            
            <p class="text-slate-300 leading-relaxed mb-8 text-lg">{{ $place->description }}</p>

            <!-- 8 Key Data Points Grid -->
            <div class="grid md:grid-cols-2 gap-6 bg-slate-950 p-6 rounded-2xl border border-slate-800">
                <div>
                    <h4 class="text-amber-400 font-semibold mb-1">🗓️ Best Time to Visit</h4>
                    <p class="text-slate-300">{{ $place->best_time }}</p>
                </div>

                <div>
                    <h4 class="text-amber-400 font-semibold mb-1">💰 Estimated Budget</h4>
                    <p class="text-slate-300">{{ $place->budget }}</p>
                </div>

                <div>
                    <h4 class="text-amber-400 font-semibold mb-1">🎯 Popular Activities</h4>
                    <p class="text-slate-300">{{ $place->activities }}</p>
                </div>

                <div>
                    <h4 class="text-amber-400 font-semibold mb-1">🏨 Available Facilities</h4>
                    <p class="text-slate-300">{{ $place->facilities }}</p>
                </div>
                
@auth
    <form action="{{ route('favorites.store', $place->id) }}"
          method="POST">
        @csrf

        <button type="submit"
            class="bg-amber-500 hover:bg-amber-400
                   text-slate-950 px-5 py-3 rounded-lg
                   font-semibold transition">
            ♥ Add to Favorites
        </button>
    </form>
@else
    <a href="{{ route('login') }}"
       class="inline-block bg-amber-500 hover:bg-amber-400
              text-slate-950 px-5 py-3 rounded-lg
              font-semibold transition">
        Login to Add Favorites
    </a>
@endauth

                <div class="mt-10 bg-slate-900 border border-slate-800 rounded-3xl p-6 shadow-2xl">
    <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
        <span>🗺️</span> Location Map
    </h3>
    <div class="w-full h-80 rounded-2xl overflow-hidden border border-slate-800">
        <iframe 
            width="100%" 
            height="100%" 
            style="border:0;" 
            loading="lazy" 
            src="https://maps.google.com/maps?q={{ urlencode($place->title . ' ' . $place->location) }}&t=&z=13&ie=UTF8&iwloc=&output=embed">
        </iframe>
    </div>
</div>
            </div>
        </div>
    </div>
</div>

@endsection