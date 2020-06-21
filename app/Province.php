<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Neighborhood;

class Province extends Model
{
   public function neighborhood() {
       return $this->hasMany(Neighborhood::class);
   }
}
