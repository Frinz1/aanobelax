<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Product extends Model
{

    use HasFactory;

    protected $fillable = [
        'title', 'description', 'image', 'rating', 'genre', 'body',
    ];
    
    public function bookmark()
    {
        return $this->hasOne(Bookmark::class);
    }
}