<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pelanggan.index',[
            'pelanggan' => Pelanggan::all(),
            'orders' => Order::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pelanggan.create');
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
            'name' => 'required|max:255',
            'notel' => 'required',
            'order' => 'required',
            'address' => 'required',
            // 'catatan' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        Pelanggan::create($validatedData);

        return redirect('/dashboard/pelanggan')->with('success','Pelanggan baru berjaya ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        return view('dashboard.pelanggan.show',[
            'pelanggan' => $pelanggan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan)
    {
        return view('dashboard.pelanggan.edit',[
            'pelanggan' => $pelanggan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'notel' => 'required',
            'order' => 'required',
            'address' => 'required',
            // 'catatan' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('pelanggan-images');
        }

        if($request->oldImage){
            Storage::delete($request->oldImage);
        }

        // $validatedData['name'] = auth()->user()->name;
        
        Pelanggan::where('id', $pelanggan->id)
                    ->update($validatedData);

        return redirect('/dashboard/pelanggan')->with('success','Edit data pelanggan berjaya!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan)
    {
        if($pelanggan->image){
            Storage::delete($pelanggan->image);
        }
        Pelanggan::destroy($pelanggan->id);

        return redirect('/dashboard/pelanggan')->with('success','Data pelanggan berjaya dipadam!');
    }
}
