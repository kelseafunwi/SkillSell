<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User; 

class Star extends Model
{
    use HasFactory;

    public function starrable() {
        $this->morphTo();
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
