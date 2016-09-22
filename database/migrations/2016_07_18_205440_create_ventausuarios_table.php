<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentausuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ventausuarios', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('venta');
			$table->string('usuario');
			$table->string('moneda');
			$table->string('comision');


			$table->foreign('venta')->references('CodVenta')->on('ventas');
			$table->foreign('usuario')->references('username')->on('users');

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
		Schema::drop('ventausuarios');
	}

}
