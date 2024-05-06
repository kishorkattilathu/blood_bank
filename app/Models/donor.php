<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donor extends Model
{
    use HasFactory;
    protected $table='donors';
    protected $fillable=['donor_name','donor_bank_id','donor_bank_email','donor_email','gender','phone','bank','location','blood','documents','type','status','donation_status'];
    protected $primaryKey='donor_id';
}
