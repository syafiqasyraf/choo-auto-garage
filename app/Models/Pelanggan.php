<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    
    // // utk allow guna Pelanggan::create
    // protected $fillable = ['nama','notel'];
    
    protected $guarded = ['id'];
   
}
