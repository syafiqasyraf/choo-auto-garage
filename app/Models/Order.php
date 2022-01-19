<?php

namespace App\Models;

use App\Models\Stok;
use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
    public function stok()
    {
        return $this->belongsToMany(Stok::class, 'order_stok_upload', 'order_id', 'stok_id');
    }
}
