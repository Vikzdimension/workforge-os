<?php

namespace App\Domains\Organizations\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Domains\Users\Models\User;

class Organization extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'organization_id');
    }    
}
