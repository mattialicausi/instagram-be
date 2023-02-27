<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use App\Models\User;
// use App\Models\Post;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    // 1 comment ha un user
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // 1 comment ha un post
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

}
