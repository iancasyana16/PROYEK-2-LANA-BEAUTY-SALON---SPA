<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingLayanan extends Model
{
    use HasFactory;
    protected $table = 'bookings_layanans';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_bookings',
        'id_layanan',
    ];

    // Relasi dengan tabel Users
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'id_bookings');
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
