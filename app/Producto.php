<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos';


    protected $fillable=['name','price','categorias_id','stock'];

    public function Categorias(){

        return $this->belongsTo('App\Categoria');

    }
}
