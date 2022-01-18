<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        
        return view('pelanggan', [
            "title" => "Pelanggan",
            "pelanggan" => Pelanggan::all()
            // ->paginate(5)
        ]);
    }

}
