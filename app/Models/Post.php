<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\PostLikes;

class Post extends Model
{
    use HasFactory;
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function postable() {
        return $this->morphto()->withTrashed();
    }

    public function post() {
        return $this->morphOne(Post::class, 'postable');
    }

    public function likes() {
        return $this->hasMany(PostLikes::class, 'post_id');
    }

    public function comments() {
        return $this->hasMany(PostComment::class, 'post_id')
            ->whereNull('parent_comment_id');
    }
}
