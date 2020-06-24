<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('photoPath')->nullable();
            $table->integer('category')->nullable();
            $table->string('video')->nullable();
            $table->text('details')->nullable();
            $table->text('machine')->nullable();
            $table->text('material')->nullable();
            $table->text('filePath')->nullable();
            $table->text('longerWidth')->nullable();
            $table->text('longerWidthUnit')->nullable();
            $table->text('shorterWidth')->nullable();
            $table->text('shorterWidthUnit')->nullable();
            $table->text('height')->nullable();
            $table->text('heightUnit')->nullable();
            $table->text('cutTime')->nullable();
            $table->text('cutTimeUnit')->nullable();
            $table->text('toolpathType')->nullable();
            $table->text('endMill')->nullable();
            $table->text('stepOver')->nullable();
            $table->text('stepDown')->nullable();
            $table->text('feedRate')->nullable();
            $table->text('plungeRate')->nullable();
            $table->text('postProcessing')->nullable();
            $table->text('alteration')->nullable();
            $table->text('inspiration')->nullable();
            $table->string('processingTime')->nullable();
            $table->string('processingTimeUnit')->nullable();
            $table->id();
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
