<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('description')->nullable();
            $table->foreignId('website_id')->constrained()->onDelete('cascade');
            $table->foreignId('users_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commons');
    }
}
