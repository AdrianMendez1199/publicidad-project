<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['status', 'user_id', 'plan_id', 'payment_request_token'];
}
