<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competicion extends Model
{
    protected $table='competicions';


    protected $fillable=['name','deportes_id','description','history'];

    public function Deportes(){

        return $this->belongsTo('App\Deporte');

    }
}
