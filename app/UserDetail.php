<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        'eye_color', 'bust', 'waist', 'hip', 'user_id'
    ];

}