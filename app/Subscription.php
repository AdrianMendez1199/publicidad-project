<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = ['plan_id', 'user_id', 'expired_at', 'start_date'];
    protected $table = 'subscriptions';
}
