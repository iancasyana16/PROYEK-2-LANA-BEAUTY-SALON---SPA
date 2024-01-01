<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    use HasFactory;

    protected $table = 'salons';

    protected $primaryKey = 'id_salon';

    protected $fillable = [
        'nama_salon',
        'foto_salon',
        'logo_salon',
        'alamat_salon',
        'deskripsi',
        'visi_salon',
        'misi_salon',
        'weekday_buka',
        'weekday_tutup',
        'weekend_buka',
        'weekend_tutup',
        'facebook',
        'instagram',
        'twitter',
    ];

    protected $casts = [
        'weekday_buka' => 'time',
        'weekday_tutup' => 'time',
        'weekend_buka' => 'time',
        'weekend_tutup' => 'time',
    ];

    // Jika diperlukan, definisikan relasi atau metode lainnya di sini
}
