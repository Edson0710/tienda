<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function categorias(){
        return $this->belongsToMany(Categoria::class, 'producto_categoria');
    }

    public function imagenes(){
        return $this->hasMany(Imagen::class);
    }

    public function pedidos(){
        return $this->belongsToMany(Pedido::class, 'pedido_productos')->withPivot('cantidad', 'precio')->withTrashed();
    }

    protected function setMenudeoAttribute($value){
        $this->attributes['menudeo'] = floatval(preg_replace('/[^-0-9\.]/', '', $value));
    }

    protected function getMenudeoAttribute($value){
        return number_format($value, 2);
    }

    protected function setMayoreoAttribute($value){
        $this->attributes['mayoreo'] = floatval(preg_replace('/[^-0-9\.]/', '', $value));
    }

    protected function getMayoreoAttribute($value){
        return number_format($value, 2);
    }
}
