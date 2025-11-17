<?php

namespace App\Domains\Organizations\Models;

use App\Domains\Users\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    protected static function newFactory()
    {
        return \Database\Factories\OrganizationFactory::new();
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
