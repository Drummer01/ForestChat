<?php


namespace App\Containers\Channel\Traits;


use App\Containers\Channel\Models\Channel;
use App\Containers\User\Models\User;
use Illuminate\Support\Facades\Config;

/**
 * Trait HasChannelAccessTrait
 *
 * @package App\Containers\Channel\Traits
 */
trait HasChannelAccessTrait
{
    /**
     * @param User|null $user
     *
     * @return bool
     */
    public function hasChannelAccess(User $user = null)
    {
        // if not in parameters, take from the request object {$this}
        $user = $user ? : $this->user();

        if($user) {
            $channel = Channel::find($this->id);
            $user->withChannel($channel);
        }

        if($user) {
            $autoAccessRoles = Config::get('apiato.requests.allow-roles-to-access-all-routes');
            // there are some roles defined that will automatically grant access
            if (!empty($autoAccessRoles)) {
                $hasAutoAccessByRole = $user->hasAnyRole($autoAccessRoles);
                if ($hasAutoAccessByRole) {
                    return true;
                }
            }
        }


        // check if the user has any role / permission to access the route
        $hasAccess = array_merge(
            $this->hasAnyChannelPermissionAccess($user),
            $this->hasAnyChannelRoleAccess($user)
        );

        // allow access if user has access to any of the defined roles or permissions.
        return empty($hasAccess) ? true : in_array(true, $hasAccess);
    }

    /**
     * @param $user
     *
     * @return array
     */
    public function hasAnyChannelRoleAccess($user)
    {
        if (!array_key_exists('channel_roles', $this->access) || !$this->access['channel_roles']) {
            return [];
        }

        $roles = explode('|', $this->access['channel_roles']);

        $hasAccess = array_map(function ($role) use ($user) {
            // Note: internal return
            return $user->hasChannelRole($role);
        }, $roles);

        return $hasAccess;
    }


    public function hasAnyChannelPermissionAccess($user)
    {
        if (!array_key_exists('permissions', $this->access) || !$this->access['permissions']) {
            return [];
        }

        $permissions = explode('|', $this->access['permissions']);

        $hasAccess = array_map(function ($permission) use ($user) {
            // Note: internal return
            return $user->hasChannelPermissionTo($permission);
        }, $permissions);

        return $hasAccess;
    }
}