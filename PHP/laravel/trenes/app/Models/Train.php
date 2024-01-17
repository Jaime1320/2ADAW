<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;
    
    public function artista_cancion()
    {
        return $this->belongsTo(Artista::class, 'artista_id');
    }

}
