<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Reaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    // 1 reaction ha un user
        public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // 1 reaction ha un post
    public function posts(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
