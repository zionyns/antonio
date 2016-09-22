<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model {

	protected $fillable = ['CodVenta', 'fecha', 'vendedor','tipomoneda','preciototal','preciopagado','descuento','tipocambio'];

}
