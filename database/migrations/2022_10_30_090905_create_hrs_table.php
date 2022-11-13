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
        Schema::create('hrs', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id');
            $table->string('hrPhoto');
            $table->string('hrName');
            $table->string('hrAddress');
            $table->string('hrSalary');
            $table->string('hrPhone');
            $table->string('degination');
            $table->string('status');            
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
        Schema::dropIfExists('hrs');
    }
};
