<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('description');
            $table->string('photo');

            $table->unsignedInteger('post_id');
            $table->foreign("post_id")->references("id")->on("posts")->onDelete("Cascade");

            $table->unsignedInteger('account_id');
            $table->foreign("account_id")->references("id")->on("accounts")->onDelete("Cascade");

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
        Schema::dropIfExists('trades');
    }
}
