<?php

namespace App\Modules\Users\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use HasFactory;

    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'password',
    ];

    public $timestamps = false;
}