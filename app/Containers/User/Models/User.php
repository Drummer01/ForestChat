<?php

namespace App\Containers\User\Models;

use App\Containers\Channel\Models\Channel;
use App\Ship\Parents\Models\UserModel;

/**
 * Class User.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class User extends UserModel
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'password',
    ];

    protected $casts = [
    ];

    /**
     * The dates attributes.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];


    /**
     * Allowes to authenticate with username
     *
     * @param $username
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function findForPassport($username)
    {
        return $this->where('name', $username)->first();
    }

    public function channels()
    {
        return $this->hasMany(Channel::class, 'creator_id');
    }
}
