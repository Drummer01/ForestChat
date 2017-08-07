<?php

namespace App\Containers\Channel\Models;

use App\Ship\Parents\Models\Model;

class Channel extends Model
{
    protected $fillable = [
        'name',
        'creator_id'
    ];

    protected $hidden = [];

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
}
