<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKutyosokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kutyusok', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dog_priority_id')->index();
            $table->foreign('dog_priority_id')->references('id')->on('priorities');
            $table->string('dog_name', 45);
            $table->string('image_path', 200);
            $table->boolean('dog_gender')->default(0);
            $table->integer('dog_age');
            $table->string('dog_breed', 45);
            $table->string('dog_color', 45);
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
        Schema::dropIfExists('kutyosok');
    }
}
