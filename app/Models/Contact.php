<?php

namespace App\Models;

// Models to relate
use App\Models\PhoneNumber;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Contact extends Model
{
    use HasFactory;

    public function phoneNumber() {
        return $this->hasOne(PhoneNumber::class, 'phone_id');
    }

    public function user() {
        return $this->belongsToMany(User::class);
    }

    public function stars() {
        return $this->morphMany(Star::class, 'starrable');
    }
}
