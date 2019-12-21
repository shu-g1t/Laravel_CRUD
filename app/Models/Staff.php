<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = ['staff_id', 'password','staff_name','created_at'];

    protected $table = 'staffs';
}
