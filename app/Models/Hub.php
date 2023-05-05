<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\City;
use App\Models\Sector;


class Hub extends Model
{
    use HasFactory;

    public function city() {
        $this->belongs(City::class, 'city_id');
    }

    public function user() {
        $this->belongs(User::class, 'user_id');
    }

    public function sector() {
        $this->belongs(Sector::class, 'sector_id');
    }
}
