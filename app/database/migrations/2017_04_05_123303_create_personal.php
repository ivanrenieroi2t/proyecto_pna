<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonal extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personal', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',128);
			$table->string('apellido',128);
			$table->string('direccion');
			$table->string('telefono',20);
			$table->string('celular',20);
			$jerarquia = array('Personal Superior',
							   'Personal Subalterno');
			$table->enum('jerarquia',$jerarquia);
			$categoria = array('(PG) Prefecto General',
							    '(PM) Prefecto Mayor',
							    '(PP) Prefecto Principal',
							    '(PR) Prefecto',
							    '(OP) Oficial Principal',
							    '(OA) Oficial Ayudante',
							    '(OX) Oficial Auxiliar', // ---
							    '(AM) Ayudante Mayor',
							    '(AP) Ayudante Principal',
							    '(AI) Ayudante de Primera',
							    '(AS) Ayudante de Segunda',
							    '(AT) Ayudante de Tercera',
							    '(CI) Cabo Primero',
							    '(CS) Cabo Segundo',
							    '(MO) Marinero');
			$table->enum('categoria',$categoria);
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
		Schema::drop('personal');
	}

}
