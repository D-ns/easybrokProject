<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model {
    protected $table = 'sucursales'; 
    protected $fillable=['NOMBRE','USUARIOCREACION','USUARIOMODIFICACION','ESTADO'];

}
