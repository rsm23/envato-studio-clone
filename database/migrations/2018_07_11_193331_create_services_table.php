<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration {
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('channel_id');
            $table->unsignedInteger('user_id');
            $table->text('description');
            $table->text('brief');
            $table->integer('price');
            $table->integer('turnaround');
            $table->integer('revisions');
            $table->timestamps();
            
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->foreign('channel_id')
                    ->references('id')
                    ->on('channels')
                    ->onDelete('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('services');
    }
}
