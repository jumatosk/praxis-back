<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'author'];

    public  function scopeSearchByTitle($query, $title)
    {
        return $query->where('title', 'LIKE', '%' . $title . '%')->paginate(config('app.pageLimit'));
    }

    public  function scopeSearchByAuthor($query, $author)
    {
        return $query->where('author', 'LIKE', '%' . $author . '%')->paginate(config('app.pageLimit'));
    }
}
