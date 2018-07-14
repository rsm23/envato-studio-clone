<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    
    /**
     * A Service must have an owner.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner() {
        return $this->belongsTo(User::class);
    }
    
    /**
     * A Service belongs to a channel.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function channel() {
        return $this->belongsTo(Channel::class);
    }
}
