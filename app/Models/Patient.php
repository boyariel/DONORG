<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;
    use Notifiable;

    protected $guard = 'patient';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $table = 'patients';

    protected $fillable = [
        'id',
        'name',
        'last_name_father',
        'last_name_mother',
        'personal_id',
        'gender',
        'code',
        'birthdate',
        'address',
        'number_reference',
        'email',
        'password',
        'user_id',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
