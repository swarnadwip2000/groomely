<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_cms', function (Blueprint $table) {
            $table->id();
            $table->string('banner_img')->nullable();
            $table->string('banner_content_1')->nullable();
            $table->string('banner_content_2')->nullable();
            $table->string('section_1_title')->nullable();
            $table->text('section_1_description')->nullable();
            $table->string('section_2_title')->nullable();
            $table->string('section_2_name')->nullable();
            $table->text('section_2_description')->nullable();
            $table->string('section_2_img')->nullable();
            $table->string('section_3_title')->nullable();
            $table->text('section_3_description')->nullable();
            $table->string('section_4_title')->nullable();
            $table->text('section_4_description')->nullable();
            $table->string('section_5_title')->nullable();
            $table->text('section_5_description')->nullable();
            $table->string('section_5_img')->nullable();
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
        Schema::dropIfExists('home_cms');
    }
}
