<?php

namespace App\Containers\Authorization\Data\Seeders;

use App\Containers\Authorization\Tasks\CreatePermissionTask;
use App\Ship\Parents\Seeders\Seeder;
use Illuminate\Support\Facades\App;

/**
 * Class AuthorizationPermissionsSeeder_1
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class AuthorizationPermissionsSeeder_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default Permissions ----------------------------------------------------------

        App::make(CreatePermissionTask::class)->run('manage-roles', 'Create, Update, Delete, List, Attach/detach permissions to Roles and List Permissions.');
        App::make(CreatePermissionTask::class)->run('create-admins', 'Create new Users (Admins) from the dashboard.');
        App::make(CreatePermissionTask::class)->run('manage-admins-access', 'Assign users to Roles.');
        App::make(CreatePermissionTask::class)->run('access-dashboard', 'Access the admins dashboard.');

        // Default Permissions related to channel -----------------------------------------------------------

        App::make(CreatePermissionTask::class)->run('remove-channel', 'Remove channel from list.');
        App::make(CreatePermissionTask::class)->run('update-channel', 'Update channel data.');
        App::make(CreatePermissionTask::class)->run('manage-channel-bans', 'Block\Unblock User from accessing channel.');
        App::make(CreatePermissionTask::class)->run('manage-staff-access', 'Assign\Revoke users to channel Roles.');
        App::make(CreatePermissionTask::class)->run('manage-channel-roles', 'Create, Update, Delete, List, Attach\Detach permissions from\to channel Role.');
        App::make(CreatePermissionTask::class)->run('kick-users', 'Kick users from channel.');
    }
}
