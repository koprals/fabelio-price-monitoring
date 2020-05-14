<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemSchemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_schemas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->boolean('is_full_url')->default(1);
            $table->text('css_expression');
            $table->string('full_content_selector');

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
        Schema::dropIfExists('item_schemas');
    }
}
