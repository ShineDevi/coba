<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Kendaraan as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table='kendaraan';
    protected $primaryKey='id_kendaraan';
    protected $fillable = [
        'id_jenis_kendaraan',
        'plat_kendaraan',
        'foto_kendaraan',
        'status_kendaraan',
    ];
}
