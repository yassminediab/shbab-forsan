<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('are_sections', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->string('title_en');
            $table->string('title_ar');
            $table->text('content_en');
            $table->text('content_ar');
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
        Schema::dropIfExists('are_sections');
    }
}
