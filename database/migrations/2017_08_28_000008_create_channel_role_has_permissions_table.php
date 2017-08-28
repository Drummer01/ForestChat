<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChannelRoleHasPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channel_role_has_permissions', function (Blueprint $table) {
            $table->unsignedInteger('permission_id')->index();
            $table->unsignedInteger('channel_role_id')->index();

            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->foreign('channel_role_id')->references('id')->on('channel_roles')->onDelete('cascade');

            $table->primary(['permission_id', 'channel_role_id'], 'ch_role_has_permissions_permission_id_channel_role_id_primary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('channel_role_has_permissions');
    }
}
