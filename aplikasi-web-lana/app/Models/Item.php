<?php

// File: app\Models\Item.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // ...

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan');
    }
}
