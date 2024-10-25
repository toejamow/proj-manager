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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->foreignId('id_creater')->references('id')->on('users')->onDelete('cascade');
            $table->text('descr');
            $table->date('date_start');
            $table->date('date_end');
            $table->enum('status', ['0','1','2']);
            $table->integer('left_days');
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
        Schema::dropIfExists('project');
    }
};
