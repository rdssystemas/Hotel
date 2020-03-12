<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospedes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeCompleto', 150);
            $table->string('email', 80)->unique();
            $table->string('cpf', 14)->unique();
            $table->string('acompanhante', 150);
            $table->datetime('dataCadastro');
            $table->datetime('dataReserva');
            $table->double('valorSinal', 10, 2);
            $table->datetime('dataSinal');
            $table->string('logradouro', 200);
            $table->string('numero', 6);
            $table->string('complemento', 200);
            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades')->onDelete('cascade');
            $table->string('telefone', 13);
            $table->string('celular', 14);
            $table->datetime('dataNascimento');
            $table->string('modeloCarro', 20);
            $table->string('marcaCarro', 20);
            $table->string('corCarro', 20);
            $table->string('placaCarro', 7);
            $table->string('nomeEmpresa', 150);
            $table->string('cnpjEmpresa', 18);
            $table->string('telefoneEmpresa', 13);
            $table->text('observacao');
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
        Schema::dropIfExists('hospedes');
    }
}
