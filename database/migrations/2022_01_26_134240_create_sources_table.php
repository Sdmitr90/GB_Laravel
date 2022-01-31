<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('news_id')->unsigned();
            $table->string('source_name', 100);
            $table->string('source_description', 500);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->foreign('news_id')->references('id')->on('news')->onDelete("NO ACTION");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sources');
    }
}
