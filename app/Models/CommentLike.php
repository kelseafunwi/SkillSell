<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// imported Models
use App\Model\Post;
use App\Model\User;

class CommentLike extends Model
{
    use HasFactory;

    public function post() {
        return $this->belongs(Post::class, 'post_id');
    }

    public function user() {
        return $this->belongs(User::class, 'user_id');
    }
}
