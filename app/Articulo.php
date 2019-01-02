<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = [
        'idcategoria', 'codigo', 'nombre', 'precio_venta', 'stock', 'descripcion', 'condicion',
    ];

    //enlazo el modelo y la tabla
    public function categoria()
    {
        //viene o pertenece a un id categoria
        //ya que una categoria tiene un articulo
        return $this->belongsTo('App\Categoria');
    }
    //
}
