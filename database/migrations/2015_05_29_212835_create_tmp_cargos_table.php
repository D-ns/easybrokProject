<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmpCargosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tmp_cargo', function(Blueprint $table)
		{
			$table->integer('id');
                        $table->string('NOMBRE');
                        $table->int('USUARIOCREACION');
                        $table->int('USUARIOMODIFICACION');
        	        $table->string('ESTADO');
                        $table->integer('created_at');
                        $table->integer('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tmp_cargos');
	}

}
