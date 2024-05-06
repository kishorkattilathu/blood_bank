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
        Schema::create('banks', function (Blueprint $table) {
            $table->bigIncrements('bank_id');
            $table->string('bank_name',100);
            $table->string('bank_email',100);
            $table->string('bank_address',400);
            $table->string('bank_phone',100);
            $table->string('bank_type',100);
            $table->string('bank_image',400);
            $table->string('documents',400);
            $table->string('bank_password',100);
            $table->string('bank_status',100);
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
        Schema::dropIfExists('banks');
    }
};
