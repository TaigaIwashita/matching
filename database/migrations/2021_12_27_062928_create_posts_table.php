<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('post_title', 50);//タイトル
            $table->string('post_body', 200);//概要
            $table->string('room_code', 20);//ルームコード
            $table->unsignedTinyInteger('player_sum');//プレイヤー数
            $table->dateTime('start_time');//スタート時間
            $table->dateTime('finish_time');//終了時間
            $table->dateTime('limit_time');//いつまで掲載するか
            $table->boolean('user_permission');//ユーザーの追加方法
            $table->boolean('release_format');//公開方法
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
        Schema::dropIfExists('posts');
    }
}
