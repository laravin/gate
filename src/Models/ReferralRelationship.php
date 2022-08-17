<?php

namespace Laravin\Referral\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralRelationship extends Model
{
    protected $fillable = [
        'referral_link_id',
        'user_id',
    ];
}
