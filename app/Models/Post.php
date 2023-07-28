<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'category_id', 'user_id', 'image'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false){
            $query
            ->where('title', 'like', '%' . request('search') . '%' )
            ->orWhere('body', 'like', '%' . request('search') . '%');
        }
    }

    public function author() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
