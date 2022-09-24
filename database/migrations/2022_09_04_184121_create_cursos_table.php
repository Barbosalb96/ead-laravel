<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('amount_period');
            $table->string('shift');
            $table->string('modality');
            $table->text('description');
            $table->decimal('price', 9, 3);
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('type_course');
            $table->foreign('type_course')->references('id')->on('type_courses');
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
        Schema::dropIfExists('cursos');
    }
}
