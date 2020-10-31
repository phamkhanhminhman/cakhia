<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableShareAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('share_albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('album_id')->unique()->nullable();
            $table->string('title');
            $table->string('group')->nullable();
            $table->string('thumbnail');
            $table->string('link');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('share_albums');
    }
}
