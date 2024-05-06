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
        Schema::create('donors', function (Blueprint $table) {
            $table->bigIncrements('donor_id');
            $table->string('donor_bank_id',100);
            $table->string('donor_bank_email',100);
            $table->string('donor_name',100);
            $table->string('donor_email',100);
            $table->string('gender',100);
            $table->string('phone',100);
            $table->string('bank',100);
            $table->string('location',100);
            $table->string('blood',100);
            $table->string('documents',400);
             $table->string('type',100);
            $table->string('status',100);
            $table->string('donation_status',100);
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
        Schema::dropIfExists('donors');
    }
};
