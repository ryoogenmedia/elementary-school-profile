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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->text('address')->nullable();
            $table->string('name_school')->nullable();
            $table->string('operational')->nullable();
            $table->string('email_school')->nullable();
            $table->string('phone')->nullable();
            $table->string('slogan')->nullable();
            $table->string('total_teacher')->nullable();
            $table->string('total_student')->nullable();
            $table->string('total_alumni')->nullable();
            $table->string('total_staff')->nullable();
            $table->text('about')->nullable();
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
        Schema::dropIfExists('contacts');
    }
};
