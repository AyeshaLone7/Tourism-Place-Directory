<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Place extends Model {
    protected $fillable = ['category_id', 'title', 'slug', 'location', 'image', 'description', 'best_time', 'activities', 'facilities', 'budget'];
    public function category() { return $this->belongsTo(Category::class); }
    public function favoritedBy()
{
    return $this->belongsToMany(
        User::class,
        'favorites'
    )->withTimestamps();
}
}