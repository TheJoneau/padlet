<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entry extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'text', 'creator_id', 'padlet_id'];

    public function creator() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function padlet() : BelongsTo {
        return $this->belongsTo(Padlet::class);
    }

    public function comments() : HasMany {
        return $this->hasMany(Comment::class);
    }

    public function ratings() : HasMany {
        return $this->hasMany(Rating::class);
    }
}
