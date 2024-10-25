<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('descr');
            $table->foreignId('id_proj')->references('id')->on('project')->onDelete('cascade');
            $table->foreignId('id_performer')->references('id')->on('users')->onDelete('cascade');
            $table->enum('priority', ['0','1','2']);
            $table->date('date_start');
            $table->date('date_end');
            $table->enum('status', ['0','1','2']);
            $table->integer('left');
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
        Schema::dropIfExists('task');
    }
};
