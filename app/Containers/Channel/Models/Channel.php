<?php

namespace App\Containers\Channel\Models;

use App\Containers\ChannelAuthorization\Models\ChannelRole;
use App\Ship\Parents\Models\Model;

class Channel extends Model
{
    protected $fillable = [
        'name',
        'hidden',
        'creator_id',
        'image_url',
        'password'
    ];

    protected $hidden = [
        'password'
    ];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * @return bool
     */
    public function hasPassword()
    {
        return !is_null($this->password);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roles()
    {
        return $this->hasMany(ChannelRole::class)->orWhere('channel_id', 0);
    }
}
