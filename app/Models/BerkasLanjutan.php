<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class BerkasLanjutan extends Model
{
    protected $table = 'berkas_lanjutan';
    protected $primaryKey = 'id_berkas_lanjutan';
    protected $fillable = [
        'id_mahasiswa',
        'nim'
    ];
}
