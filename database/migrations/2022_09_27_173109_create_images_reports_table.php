<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images_reports', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('image_id')->unsigned();
            $table->bigInteger('report_id')->unsigned();

            $table->foreign('image_id', 'fk_images_reports_images')
                ->references('id')
                ->on('images');
            $table->foreign('report_id', 'fk_images_reports_reports')
                ->references('id')
                ->on('reports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images_reports');
    }
}
