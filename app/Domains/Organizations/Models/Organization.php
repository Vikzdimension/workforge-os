<?php

namespace App\Domains\Organizations\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];
}
