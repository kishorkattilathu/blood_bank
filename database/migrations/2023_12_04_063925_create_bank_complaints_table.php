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
        Schema::create('bank_complaints', function (Blueprint $table) {
            $table->bigIncrements('customer_complaint_id');
            $table->string('customer_complaint_name',100);
            $table->string('customer_complaint_email',100);
            $table->string('customer_bank_name',100);
            $table->string('customer_bank_email',100);
            $table->string('customer_message',100);
            $table->string('bank_message_reply',100);

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
        Schema::dropIfExists('bank_complaints');
    }
};
