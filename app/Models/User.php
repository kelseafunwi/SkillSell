<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// other models for relationship mapping
use App\Models\Contact;
use App\Models\PhoneNumber;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'occupation',
        'email',
        'profile',
        'status',
        'step',
        'role',
        'last_seen',
        'city_id',
        'twitter',
        'linkedin',
        'whatsapp',
        'role_class',
        'fcm_token',
        'password',
        'location'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // relationships
    // public function contacts() {
    //     return $this->belongsToMany(Contact::class);
    // }

    public function phoneNumbers() {
        return $this->hasOne(PhoneNumber::class);
    }

    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function setting() {
        return $this->hasOne(UserSetting::class);
    }

    public function connections() {
        return $this->hasMany(Connection::class, 'user_id');
    }

    public function connectionRequests() {
        return $this->hasMany(ConnectionRequest::class, 'user_id');
    }

    public function post() {
        return $this->hasMany(Post::class, 'user_id');
    }

    public function reviews() {
        return $this->hasMany(Rating::class, 'user_id');
    }

    
}
