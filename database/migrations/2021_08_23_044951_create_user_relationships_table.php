<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_relationships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('roles_id');
            $table->unsignedBigInteger('offices_id');
            $table->unsignedBigInteger('positions_id');
            $table->unsignedBigInteger('user_images_id')->nullable();
            $table->timestamps();

            $table->foreign('users_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('roles_id')
            ->references('id')
            ->on('roles')
            ->onDelete('cascade');

            $table->foreign('offices_id')
            ->references('id')
            ->on('offices')
            ->onDelete('cascade');

            $table->foreign('positions_id')
            ->references('id')
            ->on('positions')
            ->onDelete('cascade');

            $table->foreign('user_images_id')
            ->references('id')
            ->on('user_images')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_relationships');
    }
}
