<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table='users';

    protected  $fillable = [
        'fullname',
        'phone',
        'email',
        'address',
        'username',
        'password',
        'avatar',
        'roles'
    ];
}
