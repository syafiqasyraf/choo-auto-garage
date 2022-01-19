<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stok = Stok::latest()->filter(request(['search']))->paginate(2);
        return view('dashboard.stok.index',[
            'stok' => $stok,
            'pelanggan' => Pelanggan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Stok $stok)
    {
        return view('dashboard.stok.create',[
            'stok'=> $stok
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'item' => 'required|max:255',
            'jenisitem' => 'required',
            'jenamakereta' => 'nullable',
            'jeniskereta' => 'nullable',
            'lokasibarang' => 'nullable',
            'kedai' => 'nullable',
            'kuantiti' => 'required|numeric',
            'hargabeli' => 'required|numeric',
            'hargajual' => 'required|numeric',
            'tarikhbeli' => 'required|date',
            'tarikhjual' => 'nullable|date',
            'nota' => 'nullable|max:255',
        ]);

        Stok::create($validatedData);

        return redirect('/dashboard/stok')->with('success','Stok baru berjaya ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function show(Stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function edit(Stok $stok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stok $stok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stok $stok)
    {
        //
    }
}
