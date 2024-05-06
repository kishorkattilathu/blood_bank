<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table='customers';
    protected $fillable=['cust_name','cust_email','cust_phone','cust_address','cust_blood','fitness_doc','id_proof','password'];
    protected $primaryKey='customer_id';
}
