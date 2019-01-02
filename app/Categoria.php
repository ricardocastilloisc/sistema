<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //protected $table = 'categorias';

    protected $fillable = ['nombre', 'descripcion', 'condicion'];

    //relacionar categoria con articulo
    public function articulos()
    {
        //una categoria puede tener o tiene mucho o mas de uno de 
        //articulos
        return $this->hasMany('App\Articulo');
    }
}
