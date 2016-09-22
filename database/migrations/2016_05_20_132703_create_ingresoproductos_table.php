<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresoproductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingresoproductos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('CodIngreso')->unique();
			$table->string('sucursal');
			$table->string('usuario');
			$table->datetime('fecha');

			$table->foreign('sucursal')->references('CodSucursal')->on('sucursals');
			
			
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
		Schema::drop('ingresoproductos');
	}

}
