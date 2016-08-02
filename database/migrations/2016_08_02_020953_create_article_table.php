<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('article', function (Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('unique_id')->nullable()->comment('唯一ID');
            $table->string('title')->nullable()->comment('标题');
            $table->text('description')->nullable()->comment('描述');
            $table->text('content')->nullable()->comment('文章内容');
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
        //
    }
}
