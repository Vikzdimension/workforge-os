<?php

namespace App\Domains\Organizations\Models;

use App\Domains\Users\Models\User;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
