<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'rfc', 'is_active'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }
}
