<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Model\User;
use App\Model\EventCategory;
use App\Model\LiveEventSpeaker;

class LiveEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'date', 'video_url', 'cover_image',
        'event_category_id', 'user_id'
    ];

    public function user() {
        $this->belongsTo(User::class, 'user_id');
    }

    public function eventCategory() {
        $this->belongsTo(EventCategory::class, 'event_category_id');
    }

    public function speakers() {
        $this->hasMany(LiveEventSpeaker::class, 'live_event_id');
    }

    public function post() {
        return $this->morphOne(Post::class, 'postable');
    }
}
