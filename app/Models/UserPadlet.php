<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserPadlet extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'padlet_id', 'role_id'];
    protected $table = 'users_padlets';

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function padlet() : BelongsTo {
        return $this->belongsTo(Padlet::class);
    }

    public function role() : BelongsTo {
        return $this->belongsTo(Role::class);
    }
}
