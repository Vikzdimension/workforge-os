<?php

namespace App\Domains\Roles\Models;

use App\Domains\Users\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
    ];

    public static function newFactory()
    {
        return \Database\Factories\RoleFactory::new();
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
