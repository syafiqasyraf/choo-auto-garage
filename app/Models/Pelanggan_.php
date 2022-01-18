<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan
{
    private static $Pelanggan = [
        [
            "nama" => "Suhaimi Samah",
            "notel" => "0123456789",
        ],
        [
            "nama" => "Ikhwan Suhaimi",
            "notel" => "01098765462",
        ],
    ];

    public static function all(){
        return self::$Pelanggan;
    }
    
}

