<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = ['user_name','user_tel','register_date','register_time'];

    protected $table = 'registers';
}
