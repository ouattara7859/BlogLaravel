<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('title');
            $table->string('slug');
            $table->string('category_count_blog');
            $table->string('tags');
            $table->string('blog_img');
            $table->longText('description');
            $table->string('date_creation');
            $table->string('heure_creation');
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
        Schema::dropIfExists('blogs');
    }
}
