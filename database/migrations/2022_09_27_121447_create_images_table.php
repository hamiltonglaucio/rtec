<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->string('originalName', 256);
            $table->string('pathname', 256);
            $table->string('mimeType', 100);
            $table->string('size', 20);
            $table->text('comments')->nullable();
            $table->bigInteger('risk_id')->unsigned();
            $table->double('latitude', 18, 15);
            $table->double('longitude', 18, 15);

            $table->foreign('risk_id', 'fk_images_risks')
                ->references('id')
                ->on('risks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
