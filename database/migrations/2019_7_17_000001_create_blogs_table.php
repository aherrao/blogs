<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {	
		Schema::defaultStringLength(191);
		Schema::create('blogs', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('title');
			$table->string('slug')->unique();
			$table->text('description');
			$table->timestamps();
			$table->unsignedBigInteger('created_by');
			$table->foreign('created_by')->references('id')->on('users')->onUpdate('cascade');
			$table->unsignedBigInteger('updated_by');
			$table->foreign('updated_by')->references('id')->on('users')->onUpdate('cascade');
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
