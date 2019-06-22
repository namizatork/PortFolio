<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_tag', function (Blueprint $table) {
            $table->unsignedInteger('portfolio_id')->comment('投稿ID');
            $table->unsignedInteger('tag_id')->comment('タグID');

            $table->foreign('portfolio_id')
                ->references('id')
                ->on('portfolios')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('tag_id')
                ->references('id')
                ->on('tags')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_tag');
    }
}
