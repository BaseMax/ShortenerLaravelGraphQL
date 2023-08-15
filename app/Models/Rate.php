<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rate extends Model
{
    use HasFactory;

    protected $table = "link_ratings";

    protected $fillable = ["user_id", "link_id", "rating"];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function link(): BelongsTo
    {
        return $this->belongsTo(Link::class, "link_id");
    }
}
