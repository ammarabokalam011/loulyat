<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name');
            $table->string('NameAr');
            $table->text('Image')->nullable();
            $table->text('Description');
            $table->text('Specification');
            $table->integer('Price');
            $table->integer('Quantity')->default(0);
            $table->boolean('Available')->default(true);
            $table->unsignedBigInteger('CategoryID')->index('CategoryID');
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
        Schema::dropIfExists('products');
    }
}
