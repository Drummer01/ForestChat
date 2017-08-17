<?php

namespace App\Containers\Administration\Models;

use App\Containers\Channel\Models\Channel;
use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ban extends Model
{
    use SoftDeletes;

    protected $table = 'channel_bans';

    protected $fillable = [
        'channel_id',
        'admin_id',
        'user_id',
        'reason',
        'expire'
    ];

    protected $hidden = [];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @return bool
     */
    public function isExpired()
    {
        return Carbon::now()->greaterThanOrEqualTo($this->created_at->addSeconds($this->expire));
    }

    /**
     * Retrieve banned user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Retrieve admin user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    /**
     * Retrieve channel where ban was made
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
}
