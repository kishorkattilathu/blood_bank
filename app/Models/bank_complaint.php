<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank_complaint extends Model
{
    use HasFactory;
    protected $table='bank_complaints';
    protected $fillable=['customer_complaint_name','customer_complaint_email','customer_bank_name','customer_bank_email','customer_message','bank_message'];
    protected $primaryKey='customer_complaint_id';
}
