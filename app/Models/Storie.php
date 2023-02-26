<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Storie extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }

    // 1 storia ha un user
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
