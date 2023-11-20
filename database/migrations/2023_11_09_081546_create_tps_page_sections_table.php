<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTpsPageSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tps_page_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('tps_page_section_names_id');
            $table->foreign('tps_page_section_names_id')->references('id')->on('tps_page_section_names')->onDelete('cascade');
            $table->string('name');
            $table->text('text');
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
        Schema::dropIfExists('tps_page_sections');
    }
}
