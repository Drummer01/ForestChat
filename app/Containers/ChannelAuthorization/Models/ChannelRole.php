<?php

namespace App\Containers\ChannelAuthorization\Models;

use App\Containers\Authorization\Models\Permission;
use App\Containers\Channel\Models\Channel;
use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\RefreshesPermissionCache;

class ChannelRole extends Model
{
    use HasPermissions;
    use RefreshesPermissionCache;

    protected $table = 'channel_roles';

    protected $fillable = [
        'name',
        'color',
        'display_name',
        'description',
        'channel_id'
    ];

    protected $hidden = [
    ];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * @return BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_has_channel_role', 'user_id', 'channel_role_id')
            ->wherePivot('channel_id', $this->channel_id);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }

    /**
     * @return BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'channel_role_has_permissions');
    }
}
