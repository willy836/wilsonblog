<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    public function author() : BelongsTo  //foreign key is not author_id but user_id
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function post() : BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
