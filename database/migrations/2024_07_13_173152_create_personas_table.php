<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('cPerApellido',50)->nullable()->index();
            $table->string('cPerNombre',50)->nullable()->index();
            $table->string('cPerDireccion',100);
            $table->string('cPerSexo')->default('Masculino');
            $table->date('cPerFecNac');
            $table->integer('nPerEdad')->unsigned();
            $table->decimal('nPerSueldo',6,2);
            $table->char('nPerEstado')->default('1');
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
        Schema::dropIfExists('personas');
    }
};
