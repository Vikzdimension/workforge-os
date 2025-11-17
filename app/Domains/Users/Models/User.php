<?php

namespace App\Domains\Users\Models;

use App\Domains\Organizations\Models\Organization;
use App\Domains\Roles\Models\Role;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'organization_id',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
