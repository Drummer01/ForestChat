<?php

namespace App\Containers\Message\Models;

use App\Ship\Parents\Models\Model;

/**
 * Class Attachment
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class Attachment extends Model
{
    protected $table = "message_attachments";

    protected $fillable = [
        'type',
        'original_source'
    ];

    protected $hidden = [];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
