<?php
namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $categoryId = $request->input('category');

        $places = Place::query();

        // Agar user ne text search kiya ho
        if (!empty($query)) {
            $places->where(function($q) use ($query) {
                $q->where('title', 'LIKE', "%{$query}%")
                  ->orWhere('location', 'LIKE', "%{$query}%")
                  ->orWhere('description', 'LIKE', "%{$query}%");
            });
        }

        // Agar category select ki ho
        if (!empty($categoryId)) {
            $places->where('category_id', $categoryId);
        }

        $results = $places->get();

        // Alag search results blade page par bhej dein
        return view('places.search-results', [
            'places' => $results,
            'query' => $query
        ]);
    }
}