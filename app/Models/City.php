<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Model\Country;

class City extends Model
{
    use HasFactory;

    public function country() {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
