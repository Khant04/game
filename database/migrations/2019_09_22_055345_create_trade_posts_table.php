<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_posts', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('post_id');
            $table->foreign("post_id")->references("id")->on("posts")->onDelete("Cascade");

            $table->unsignedInteger('tradepost_id');
            $table->foreign("tradepost_id")->references("id")->on("trades")->onDelete("Cascade");

            $table->bigInteger('owner_id');
            $table->bigInteger('trader_id');

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
        Schema::dropIfExists('trade_posts');
    }
}
