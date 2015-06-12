<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sucursales', function(Blueprint $table)
		{
			$table->increments('IDSUCURSAL');
                        $table->string('NOMBRE');
                        $table->integer('USUARIOCREACION');
                        $table->integer('USUARIOMODIFICACION');
                        $table->boolean('ESTADO');
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
		Schema::drop('sucursales');
	}

}
