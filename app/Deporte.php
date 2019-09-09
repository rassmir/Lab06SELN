<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
    protected $table='deportes';

    protected $fillable=['name','img'];

    public function Competicions(){

        return $this->belongsTo('App\Competicion');

    }
}
