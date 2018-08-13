<?php

namespace Laraning\Galaxia\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $guard_name;

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $guarded = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->guard_name = glxguard();
    }
}
