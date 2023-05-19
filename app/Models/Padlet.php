<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Padlet extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'creator_id', 'is_public'];

    public function creator() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function entries() : HasMany {
        return $this->hasMany(Entry::class);
    }

    public function users() : BelongsToMany {
        return $this->BelongsToMany(User::class, 'users_padlets');
    }
}
