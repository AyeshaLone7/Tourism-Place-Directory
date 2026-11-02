
@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold text-white mb-2">
        ♥ My Favorites
    </h1>

    <p class="text-slate-400 mb-8">
        Your saved places in Pakistan.
    </p>

    @if (session('success'))
        <div class="bg-green-900/40 text-green-300 p-3 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    @if ($places->isEmpty())
        <div class="bg-slate-900 rounded-xl p-8 text-center">
            <p class="text-slate-300 mb-4">
                You haven't saved any places yet.
            </p>

            <a href="{{ route('places.search') }}"
               class="text-amber-400 hover:text-amber-300">
                Explore Places →
            </a>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($places as $place)
                <div class="bg-slate-900 border border-slate-800 rounded-xl p-5">
                    <h2 class="text-xl font-bold text-white mb-2">
                        {{ $place->title }}
                    </h2>

                    <p class="text-slate-400 mb-4">
                        {{ $place->location }}
                    </p>

                    <p class="text-slate-300 mb-5">
                        {{ $place->description }}
                    </p>

                    <form action="{{ route('favorites.destroy', $place->id) }}"
                          method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                            class="text-amber-400 hover:text-amber-300">
                            ♥ Remove Favorite
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
