<?php

namespace Laraning\Galaxia\Abstracts;

use Illuminate\Database\Eloquent\Model as LaravelModel;

abstract class Model extends LaravelModel
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->guard_name = config('galaxia.database.table.prefix');
        $this->table = config('galaxia.database.table.prefix').'_'.($this->getTable());
    }
}
