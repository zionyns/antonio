<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoventasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pagoventas', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('venta');
			$table->string('moneda');
			$table->float('monto');


			$table->foreign('venta')->references('CodVenta')->on('ventas');
			$table->foreign('moneda')->references('CodMoneda')->on('monedas');
			
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pagoventas');
	}

}
