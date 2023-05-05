<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Country;
use App\Models\City;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'company_type_id', 'registration_num', 'tax_num',
        'description', 'contact_name', 'contact_email', 'logo',
        'video', 'city_id',
        'website', 'facebook_visible', 'facebook', 'twitter_visible',
        'twitter', 'linkedin', 'linkedin_visible',
    ];

    public function companyType() {
        return $this->belongsTo(CompanyType::class, 'company_types');
    }

    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function country() {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
