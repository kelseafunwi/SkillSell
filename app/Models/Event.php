<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\EventCategory;
use App\Models\User;
use App\Models\City;
use App\Models\Sector;
use App\Models\Images;


class Event extends Model
{
    use HasFactory;

    public function stars() {
        return $this->morphMany(Star::class, 'starrable');
    }

    public function category() {
        return $this->belongsTo(EventCategory::clas, 'category_id');
    }

    public function user() {
        $this->belongsTo(User::class, 'user_id');
    }

    public function city() {
        $this->belongsTo(City::class, 'city_id');
    }

    public function sector() {
        return $this->belongsTo(Sector::class, 'sector_id');
    }

    public function images() {
        return $this->hasMany(EventImages::class);
    }

    public function post() {
        return $this->morphOne(Post::class, 'postable');
    }

}
