<?php

namespace App\Containers\Authorization\Models;

use Apiato\Core\Traits\HashIdTrait;
use App\Containers\ChannelAuthorization\Models\ChannelRole;
use Spatie\Permission\Models\Permission as LaratrustPermission;

/**
 * Class Permission
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Permission extends LaratrustPermission
{

    use HashIdTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'display_name',
        'description',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function channelRoles()
    {
        return $this->belongsToMany(ChannelRole::class, 'channel_role_has_permissions');
    }
}
