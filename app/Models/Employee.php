<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    // memasukan data ke database
    protected $guarded = [];
    // memberikan keterangan penambahan data
    protected $dates = ['created_at'];
}
