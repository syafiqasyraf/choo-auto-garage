<?php

namespace App\Models;

use App\Models\Stok;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class order_stok_upload extends Model
{
    use HasFactory;

    protected $fillable = [
        'stok_id',
        'order_id',
    ];

    public function stok()
    {
        return $this->belongsTo(Stok::class)->withPivot('id');
    }
    public function order()
    {
        return $this->belongsTo(Order::class)->withPivot('id');
    }
}
