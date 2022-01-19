<?php

namespace App\Models;

use App\Models\Stok;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stok extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters){
        
        if(isset($filters['search']) ? $filters['search'] : false){
           return $query->where('item','like', '%'. $filters['search'].'%' )
                ->orWhere('jeniskereta','like', '%'. $filters['search'].'%' )
                ->orWhere('jenamakereta','like', '%'. $filters['search'].'%' )
                ->orWhere('jenisitem','like', '%'. $filters['search'].'%' )
                ->orWhere('kedai','like', '%'. $filters['search'].'%' )
                ->orWhere('lokasibarang','like', '%'. $filters['search'].'%' );
        }
    }
    public function stok()
    {
        return $this->belongsToMany(Stok::class, 'order_stok_upload', 'order_id', 'stok_id');
    }

}
