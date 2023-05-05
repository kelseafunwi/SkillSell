<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\PostComment;
use App\Models\User;
use App\Models\Post;
use App\Models\CommentLike;

class PostComment extends Model
{
    use HasFactory;

    public function post() {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function replies() {
        return $this->hasMany(PostComment::class, 'parent_comment_id');
    }

    public function parentComment() {
        return $this->belongsTo(PostComment::class, 'parent_comment_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function likes() {
        return $this->hasMany(CommentLike::class, 'comment_id');
    }
}
