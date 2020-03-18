<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('emp_cad_id')->unsigned();
            $table->timestamps();
            $table->string('cargo', 100);
            $table->string('descricao', 140)->nulable();
            $table->foreign('emp_cad_id')->references('id')->on('emp_cad'); // chave estrangeira ligar
            $table->string('status', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vagas');
    }
}
