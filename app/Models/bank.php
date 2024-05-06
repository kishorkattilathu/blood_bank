<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    use HasFactory;
    protected $table='banks';
    protected $fillable=['bank_name','bank_email','bank_address','bank_phone','bank_type','bank_image','documents','bank_password','bank_status'];
     protected $primaryKey = 'bank_id';
    
}
