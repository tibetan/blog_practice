<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsRubricsLookupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_rubrics_lookup', function (Blueprint $table) {
            $table->integer('items_id')->unsigned();
            $table->integer('rubrics_id')->unsigned();
            $table->foreign('items_id')->references('id')->on('items');
            $table->foreign('rubrics_id')->references('id')->on('rubrics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items_rubrics_lookup');
    }
}
