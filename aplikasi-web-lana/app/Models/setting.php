<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'alamat',
        'telpon',
        'desk_member',
        'hari',
        'tanggal',
        'contact_us',
        'asisten_us',
        'member_us',
        'opening_us',
        'sosial_us',
    ];
}
