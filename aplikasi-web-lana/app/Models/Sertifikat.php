<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;
    protected $table = "sertifikats";
    protected $primaryKey = "id_sertif";
    protected $fillable = [
        'judul_kegiatan',
        'foto',
        'caption_kegiatan',
        'kategori',
    ];
}
