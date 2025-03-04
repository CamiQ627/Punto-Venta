<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CodigoBarras extends Model
{
    //

    use HasFactory;

    protected $fillable = ['codigo', 'producto_id', 'activo'];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
