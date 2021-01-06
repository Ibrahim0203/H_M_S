<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAskroomsTable extends Migration
{
    /**
     * Run the migrations.
     *'name','student_id','program','semester','section','email','slug'
     * @return void
     */
    public function up()
    {
        Schema::create('askrooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('student_id');
            $table->string('program');
            $table->string('semester');
            $table->string('section');
            $table->string('email');
            $table->string('slug');
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
        Schema::dropIfExists('askrooms');
    }
}
