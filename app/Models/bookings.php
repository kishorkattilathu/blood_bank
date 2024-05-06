<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookings extends Model
{
    use HasFactory;
    protected $table='bookings';
    protected $fillable=['booking_bank_id','booking_bank_email','booking_customer_id','booking_customer_email','booking_customer_phone','booking_customer-blood','booking_donor_id','booking_donor_name','booking_donor_email','booking_donor_blood','booking_status','payment_status'];
    protected $primaryKey='booking_id';
}
