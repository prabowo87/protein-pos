<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $casts = [
        'can_give_discount'           => 'boolean',
        'can_give_unlimited_discount' => 'boolean'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $perPage = 10;

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
