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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name')->required();
            $table->text('course_description');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('certificate_date')->nullable();
            $table->text('img_certificate')->nullable();
            $table->integer('x')->nullable();
            $table->integer('y')->nullable();
            $table->integer('font_size')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
