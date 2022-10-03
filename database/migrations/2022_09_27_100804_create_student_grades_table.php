<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_grades', function (Blueprint $table) {
            $table->id();
            $table->float('note_1', 2, 1);
            $table->float('note_2', 2, 1);
            $table->float('note_3', 2, 1);
            $table->float('note_4', 2, 1);
            $table->float('media', 2, 1);
            $table->boolean('status')->default(3); //1 aprovado - 2 reprovado - 3 sem dadosphp
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
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
        Schema::dropIfExists('student_grades');
    }
}
