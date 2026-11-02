<?php
namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $places = auth()->user()
            ->favoritePlaces()
            ->get();

        return view('favorites.index', compact('places'));
    }

    public function store(Place $place)
    {
        auth()->user()
            ->favoritePlaces()
            ->syncWithoutDetaching([$place->id]);

        return back()->with(
            'success',
            'Place added to My Favorites!'
        );
    }

    public function destroy(Place $place)
    {
        auth()->user()
            ->favoritePlaces()
            ->detach($place->id);

        return back()->with(
            'success',
            'Place removed from My Favorites.'
        );
    }
}
