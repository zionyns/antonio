<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('CodProducto');
			$table->string('nombre');
			$table->string('tipo');
			$table->float('peso');
			$table->integer('stock');
			$table->float('precio');
			$table->string('sucursal');
			
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
		Schema::drop('productos');
	}

}
