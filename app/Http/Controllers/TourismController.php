<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Place;
use App\Models\ContactMessage;

class TourismController extends Controller {
    public function home(Request $request) {
        $categories = Category::all();
        $query = Place::with('category');
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')->orWhere('location', 'like', '%' . $request->search . '%');
        }
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }
        $places = $query->latest()->get();
        return view('home', compact('categories', 'places'));
    }
    public function categoryPage($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        $places = Place::where('category_id', $category->id)->get();
        return view('category', compact('category', 'places'));
    }
    public function placeDetail($slug) {
        $place = Place::where('slug', $slug)->with('category')->firstOrFail();
        return view('detail', compact('place'));
    }
    public function about() { return view('about'); }
    public function contact() { 
        return view('contact'); 
    }

    public function storeContact(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create($request->all());

        return back()->with('success', 'Thank you! Your message has been received. Our team will contact you shortly.');
    }
    
   

}
