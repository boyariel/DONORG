<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\SoftDeletes;

class Director extends Authenticatable
{
    use Notifiable;
    // use Uuid;
    use SoftDeletes;

    protected $guard = 'director';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'full_name', 'user_id', 'credential_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
