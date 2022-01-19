<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggan extends Model
{
    use HasFactory;
    
    // // utk allow guna Pelanggan::create
    // protected $fillable = ['nama','notel'];
    
    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
   
}
