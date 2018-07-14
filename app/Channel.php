<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    
    /**
     * A Channel belongs to a Parent Channel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent() {
        return $this->belongsTo(ParentChannel::class);
    }
    
    /**
     * A Channel could have many services.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services() {
        return $this->hasMany(Service::class);
    }
}
