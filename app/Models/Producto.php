<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    //
    use HasFactory;

    protected $fillable = ['codigo', 'descripcion', 'categoria_id', 'activo'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function codigosBarras()
    {
        return $this->hasMany(CodigoBarras::class);
    }

    public function precios()
    {
        return $this->hasMany(Precio::class);
    }
}
