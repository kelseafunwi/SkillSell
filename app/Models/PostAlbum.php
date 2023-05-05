<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAlbum extends Model
{
    use HasFactory;

    public function post() {
        return $this->morphOne(Post::class, 'postable');
    }

    public function images() {
        return $this->hasMany(PostAlbumImage::class, 'post_album_id');
    }
}
