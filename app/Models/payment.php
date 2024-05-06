<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $table='payments';
    protected $fillable=['holder_name','card_number','cvv','expiry_month','expiry_year','amount','payment_customer_id','payment_customer_email'];
    protected $primaryKey='payment_id';
}
