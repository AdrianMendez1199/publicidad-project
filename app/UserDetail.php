<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

use App\Province;
use App\Neighborhood;
use App\Country;
class UserDetail extends Model
{
    protected $table = 'users_details';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'height', 'hair_color', 'ethnicity', 'description',
        'eye_color', 'bust', 'waist', 'hip', 'user_id', 'phone',
        'gender', 'availability_travel', 'date_of_birth', 'weight', 
        'country_id', 'province_id', 'neighborhood_id', 'gender'
    ];


    public function province() {
        return $this->belongsTo(Province::class);
    }

    public function neighborhood() {
        return $this->belongsTo(Neighborhood::class);
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }
}