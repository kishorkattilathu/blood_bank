<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complaint extends Model
{
    use HasFactory;
    protected $table='complaints';
    protected $fillable=['complaint_name','complaint_email','complaint_type','message','message_reply',];
    protected $primaryKey='complaint_id';
}
