<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentChannel extends Model
{
    
    /**
     * A Parent Channel has many sub Channels.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function channels() {
        return $this->hasMany(Channel::class);
    }
}
