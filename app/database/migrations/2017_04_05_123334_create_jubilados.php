<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJubilados extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jubilados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',128);
			$table->string('apellido',128);
			$tipo_doc = array('DNI','LC','LE','CI');
			$table->enum('tipo_doc',$tipo_doc);
			$table->string('nro_doc',15);
			$table->string('direccion');
			$table->string('localidad',128);
			$table->string('email',128);
			$table->string('telefono',20);
			$table->string('celular',20);
			$jerarquia = array('Personal Retirado Superior',
							   'Personal Pensionado Superior',
							   'Personal Retirado Subalterno',
							   'Personal Pensionado Subalterno');
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
			$table->text('observaciones');
			$table->integer('personal_responsable')->unsigned();
			$table->foreign('personal_responsable')->references('id')->on('personal');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jubilados');
	}

}
