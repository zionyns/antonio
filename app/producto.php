<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model {

	protected $fillable = ['CodProducto', 'nombre', 'tipo','peso','stock','precio','sucursal'];

}
