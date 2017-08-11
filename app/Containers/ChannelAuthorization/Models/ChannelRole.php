<?php

namespace App\Containers\ChannelAuthorization\Models;

use App\Ship\Parents\Models\Model;

class ChannelRole extends Model
{
    const MODERATOR = 1;
    const ADMINISTRATOR = 2;

    protected $table = 'channel_roles';

    protected $fillable = [];

    protected $hidden = [];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
