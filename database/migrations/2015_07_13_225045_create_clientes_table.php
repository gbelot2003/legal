<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('clientes', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('phone');
			$table->string('movil');
			$table->string('email');
			$table->text('details');
			$table->string('slug', 255);
			$table->timestamps();
        });

		Schema::create('contactos', function (Blueprint $table) {
			$table->increments('id');
			$table->string('type');
			$table->string('name');
			$table->string('cargo')->nullable();
			$table->string('phone')->nullable();
			$table->string('movil')->nullable();
			$table->string('email')->nullable();
			$table->string('notes')->nullable();
			$table->timestamps();
		});

		Schema::create('cliente_contacto', function (Blueprint $table) {
			$table->integer('cliente_id')->unsigned()->index();
			$table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');

			$table->integer('contacto_id')->unsigned()->index();
			$table->foreign('contacto_id')->references('id')->on('contactos')->onDelete('cascade');
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
        Schema::table('clientes', function (Blueprint $table) {
			Schema::drop('cliente_contacto');
			Schema::drop('clientes');
			Schema::drop('contactos');
		});
    }
}
