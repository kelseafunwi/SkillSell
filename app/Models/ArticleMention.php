<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleMention extends Model
{
    use HasFactory;

    public function article() {
        return $this->belongsTo(Article::class, 'article_id');
    }

    public function belongsTo() {
        return $this->belongsTo(Article::class, 'article_id');
    }
}
