<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSindicalizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sindicalizados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('matricula');
            $table->string('nivel');
            $table->string('cpf');            
            $table->string('rg');
            $table->string('rg_orgao_expedidor');
            $table->string('sexo');
            $table->date('dt_nascimento');
            $table->string('estado_civil');
            $table->string('fone_residencial');
            $table->string('fone_trabalho');
            $table->string('fone_celular');
            $table->string('email');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('cep');
            $table->string('bairro');
            $table->string('cidade');            
            $table->string('uf');                            
            $table->string('regime');                            
            $table->string('lotacao_municipio');
            $table->string('lotacao_escola');
            $table->string('lotacao_turno');
            $table->string('rede_ensino');
            $table->string('situacao');
            $table->string('atividade_funcional');
            $table->string('disciplina');
            $table->string('escolaridade');
            $table->string('faixa_salarial');
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
        Schema::dropIfExists('sindicalizados');
    }
}
