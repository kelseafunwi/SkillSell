<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostDocument extends Model
{
    use HasFactory;

    public function post() {
        return $this->morphOne(Pos::class, 'postable');
    }
}
