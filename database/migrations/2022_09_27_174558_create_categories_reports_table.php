<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_reports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('report_id')->unsigned();

            $table->foreign('category_id', 'fk_category_report_category')
                ->references('id')
                ->on('categories');

            $table->foreign('report_id', 'fk_category_report_report')
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
        Schema::dropIfExists('categories_reports');
    }
}
