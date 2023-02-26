<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use app\Models\Reaction;
use app\Models\Comment;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    // 1 post ha un user
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // 1 reaction molti post
    public function reactions(): HasMany
    {

        return $this->hasMany(Reaction::class);
    }

    // 1 comment molti post
    public function comments(): HasMany
    {

        return $this->hasMany(Comment::class);
    }

}
