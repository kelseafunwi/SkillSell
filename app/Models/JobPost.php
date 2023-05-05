<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\JobQualification;
use App\Models\JobType;
use App\Models\City;
use App\Models\Sector;

class JobPost extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function jobQualification() {
        $this->belongsTo(JobQualification::class, 'qualification_id');
    }

    public function city() {
        $this->belongsTo(City::class, 'city_id');
    }

    public function sector() {
        $this->belongsTo(Sector::class, 'sector_id');
    }
}
