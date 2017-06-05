<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('email', 200);
            $table->string('celular', 15);
            $table->string('endereco', 200);
            $table->integer('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->char('uf', 2);
            $table->date('nascimento');
            $table->string('cep');
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
        Schema::drop('leads');
    }
}
