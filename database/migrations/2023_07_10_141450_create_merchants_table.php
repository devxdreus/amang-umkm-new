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
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('instagram');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('pic');
            $table->string('contact');
            $table->string('email');
            $table->date('birth');
            $table->integer('outlet');
            $table->string('area');
            $table->bigInteger('gross_income');
            $table->bigInteger('net_income');
            $table->string('contract');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('category_id')->constrained();

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
        Schema::dropIfExists('merchants');
    }
};
