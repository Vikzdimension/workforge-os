<?php

namespace App\Domains\Organizations\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(\App\Domains\Users\Models\User::class);
    }    
}
