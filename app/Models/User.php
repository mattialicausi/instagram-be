<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Support\Str;
use App\Models\Storie;
use App\Models\Follower;
use App\Models\Post;
use App\Models\Reaction;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;




class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }

    // 1 user molte storie
    public function stories(): HasMany
    {

        return $this->hasMany(Storie::class);
    }

      // 1 user molti follower
      public function followers(): BelongsToMany
      {
          return $this->belongsToMany(Follower::class);
      }

    // 1 user molte post
    public function posts(): HasMany
    {

        return $this->hasMany(Post::class);
    }

     // 1 user molte reaction
     public function reactions(): HasMany
     {

         return $this->hasMany(Reaction::class);
     }

    // 1 user molte post
    public function post(): HasMany
    {
        return $this->hasMany(Post::class);
    }


    // 1 user molti comment
    public function comments(): HasMany
    {

        return $this->hasMany(Comment::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

     public function isAdmin()
     {
         return $this->is_admin == true;
     }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
