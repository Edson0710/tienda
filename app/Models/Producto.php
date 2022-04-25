<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function categorias(){
        return $this->belongsToMany(Categoria::class, 'producto_categoria');
    }

    public function imagenes(){
        return $this->hasMany(Imagen::class);
    }

    public function pedidos(){
        return $this->belongsToMany(Pedido::class, 'pedido_productos');
    }
}
