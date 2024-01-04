<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'id_layanan',
        'tanggal_booking',
        'waktu_booking',
        'status_booking',
        'informasi_tambahan',
    ];

    // Relasi dengan tabel Users
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi dengan tabel Layanan
    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan');
    }

    // public function items()
    // {
    //     return $this->hasMany(Item::class);
    // }
}
