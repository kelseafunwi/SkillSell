<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageThread extends Model
{
    use HasFactory;

    public function userOne() {
        return $this->belongsTo(User::class, 'user_one');
    }

    public function userTwo() {
        return $this->belongsTo(User::class, 'user_two');
    }

    public function messages() {
        return $this->hasMany(Message::class, 'message_thread_id');
    }
}
