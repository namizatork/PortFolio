<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('ユーザーID');
            $table->unsignedInteger('genle_id')->comment('ジャンルID');
            $table->string('image')->comment('スクリーンショット画像');
            $table->string('name')->comment('案件名');
            $table->string('text')->comment('案件説明');
            $table->string('people')->comment('チーム人数');
            $table->string('url')->comment('URL');
            $table->string('git_url')->comment('GitURL');
            $table->dateTime('from')->comment('案件開始日時');
            $table->dateTime('until')->comment('案件終了日時');
            $table->timestamps();

            $table->index('id');
            $table->index('user_id');
            $table->index('genle_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('genle_id')
                ->references('id')
                ->on('genles')
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
        Schema::dropIfExists('portfolios');
    }
}
