<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// imported models
use App\Models\User;
use App\Models\ArticleCategory;
use App\Models\Sector;
use App\Models\ArticleTag;
use App\Models\ArticleMention;

class Article extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category() {
        return $this->belongsTo(ArticleCategory::class, 'category_id');
    }

    public function sector() {
        return $this->belongsTo(Sector::class, 'sector_id');
    }

    public function tag() {
        return $this->belongsTo(ArticleTag::class, 'tag_id');
    }

    public function mentions() {
        return $this->hasMany(ArticleMention::class, 'article_id');
    }

    public function post() {
        return $this->morphOne(Post::class, 'postable');
    }

    public function views() {
        return $this->morphMany(View::class, 'viewable');
    }
}
