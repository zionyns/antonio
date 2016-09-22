<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class detalleventa extends Model {

	protected $fillable = ['producto','descripcion','cantidad','total','venta'];

}
