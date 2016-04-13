<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_tags', function (Blueprint $table) {
            $table->integer('article_id')->unsigend()->index();
            $table->foreign('article_id')
                  ->references('id')
                  ->on('article')
                  ->onDelete('cascade');

            $table->integer('tag_id')->unsigend()->index();
            $table->foreign('tag_id')
                  ->references('id')
                  ->on('tag')
                  ->onDelete('cascade');

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
        Schema::drop('article_tags');
    }
}
