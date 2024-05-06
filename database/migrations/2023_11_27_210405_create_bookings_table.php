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
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('booking_id');
            $table->string('booking_bank_id',100);
            $table->string('booking_bank_email',100);
            $table->string('booking_customer_id',100);
            $table->string('booking_customer_email',100);
            $table->string('booking_customer_phone',100);
            $table->string('booking_customer_blood',100);
            $table->string('booking_donor_id',100);
            $table->string('booking_donor_name',100);
            $table->string('booking_donor_email',100);
            $table->string('booking_donor_blood',100);
            $table->string('booking_status',100);
            $table->string('payment_status',100);
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
        Schema::dropIfExists('bookings');
    }
};
