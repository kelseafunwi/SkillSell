<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\MessageThread;

class Message extends Model
{
    protected $fillable = ['message', 'sender_id', 'message_thread_id', 'status'];

    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function thread()  {
        return $this->belongsTo(MessageThread::class, 'message_thread_id');
    }
}
