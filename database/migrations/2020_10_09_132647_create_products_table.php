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
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('models');
            $table->string('brands');
            $table->string('series');
            $table->integer('generation');
            $table->integer('ram');
            $table->integer('storage');
            $table->string('discount_type')->nullable();
            $table->string('discount')->default(0);
            $table->integer('display');
            $table->foreignId('users')->consrained()->onDelete('set null')->nullable();
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
