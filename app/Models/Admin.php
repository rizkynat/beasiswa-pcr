<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use Notifiable;
    protected $table = 'admin';
    protected $fillable = [
        'nama_admin',
        'email_admin',
        'password'
    ];
}
