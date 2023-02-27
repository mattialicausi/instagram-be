<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

       // relazione 1 a molti reaction
       public function reactions(): HasMany
       {

           return $this->hasMany(Reaction::class);
       }

        // relazione 1 a molti piatti
        public function comments(): HasMany
        {

            return $this->hasMany(Comment::class);
        }



}
