<?php

namespace App\Containers\ChannelAuthorization\Models;

use App\Containers\Channel\Traits\HasChannel;
use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;

class ChannelRole extends Model
{
    use HasChannel;

    const MODERATOR = 1;
    const ADMINISTRATOR = 2;

    protected $table = 'channel_roles';

    protected $fillable = [
        'name',
        'display_name',
        'description',
        'channel_id'
    ];

    protected $hidden = [
        'custom'
    ];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function users()
    {
        $model = $this->belongsToMany(User::class, 'user_has_channel_role', 'user_id', 'channel_role_id')
            ->withPivot('channel_id');
        if(!is_null($this->channel)) {
            $model->wherePivot('channel_id', $this->channel->id);
        }
        return $model;
    }
}
