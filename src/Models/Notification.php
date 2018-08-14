<?php

namespace Laraning\Galaxia\Models;

use Laraning\Galaxia\Abstracts\Model;

class Notification extends Model
{
    protected $guarded = [];

    /** Local Scopes **/
    public function scopeFromThisUser($query)
    {
        return $query->where($this->table.'.user_id', glxuser()->id);
    }
    /* /Local Scopes **/
}
