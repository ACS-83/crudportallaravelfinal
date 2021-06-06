<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = ['nomusu', 'email', 'localidad', 'perfil_id'];

    public function perfil() {
        return $this->belongsTo(Perfil::class);
    }
}
