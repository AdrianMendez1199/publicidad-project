<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;
class Country extends Model
{
    public function province() {
        return $this->hasMany(Province::class);
    }
}
