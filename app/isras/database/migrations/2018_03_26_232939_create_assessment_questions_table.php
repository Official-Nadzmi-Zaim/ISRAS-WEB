<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessment_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('statement', 500);
            $table->bigInteger('type');
            $table->bigInteger('category');
            $table->bigInteger('key_area');
            $table->bigInteger('title');
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
        Schema::dropIfExists('assessment_questions');
    }
}
