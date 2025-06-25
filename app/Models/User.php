<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'no_hp',
        'username',
        'password',
        'role',
    ];

    protected $hidden = ['password'];
}
