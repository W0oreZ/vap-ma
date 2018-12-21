<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('ville_id');
            $table->unsignedInteger('categorie_id');
            $table->unsignedInteger('admin_id')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->float('prix', 10, 2);
            $table->unsignedInteger('rating')->default(0);
            $table->tinyInteger('edited')->default(0);
            $table->tinyInteger('blocked')->default(0)->unsigned();
            $table->boolean('approved')->default(false);
            $table->timestamp('last_comment_at')->nullable();
            $table->unsignedInteger('num_of_views')->nullable();
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
        Schema::dropIfExists('annonces');
    }
}
