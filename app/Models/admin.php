<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $table='admins';
    protected $fillable=['admin_name','admin_email','admin_phone','admin_address','admin_password'];
     protected $primaryKey = 'admin_id';
}
